<?php
use craft\elements\Asset;
use craft\elements\Entry;
use craft\elements\User;

// Main navigation of the redesign. Existing items that are not part of it
// are disabled (not deleted).

$navigation = Craft::$app->entries->getSectionByHandle('mainNavigation');
$navType = $navigation->getEntryTypes()[0];
$pageId = fn(string $slug) => Entry::find()->section('pages')->slug($slug)->one()?->id ?? throw new Exception("page $slug missing");
$packageId = fn(string $title) => Entry::find()->section('packages')->title($title)->one()?->id ?? throw new Exception("package $title missing");
$entryLink = fn(int $id, string $label) => ['type' => 'entry', 'value' => $id, 'label' => $label];

$navItem = function (string $title, array $link, ?Entry $parent = null, ?string $description = null) use ($navigation, $navType) {
    $query = Entry::find()->section('mainNavigation')->title($title)->status(null);
    $parent ? $query->descendantOf($parent) : $query->level(1);
    $item = $query->one() ?? new Entry(['sectionId' => $navigation->id, 'typeId' => $navType->id]);
    $item->title = $title;
    $item->enabled = true;
    $item->setFieldValue('customLink', $link);
    $item->setFieldValue('navDescription', $description);
    if ($parent) {
        $item->setParentId($parent->id);
    }
    save($item);
    echo "navigation: $title\n";
    return $item;
};

$wanted = [];
$offer = $navItem('Angebot', $entryLink($pageId('angebot'), 'Angebot'));
$wanted[] = $offer->id;
foreach ([
    ['Methode CORE.Intelligence!', $pageId('angebot'), 'So entsteht Ihre Positionierung'],
    ['ORIGO', $packageId('ORIGO'), 'Klarheit'],
    ['COMPASS', $packageId('COMPASS'), 'Strategische Leitplanken'],
    ['NEXUS', $packageId('NEXUS'), 'Umsetzungsreifer Fahrplan'],
] as [$title, $id, $description]) {
    $wanted[] = $navItem($title, $entryLink($id, $title), $offer, $description)->id;
}
$wanted[] = $navItem('Cases & Referenzen', $entryLink($pageId('cases'), 'Cases & Referenzen'))->id;
$wanted[] = $navItem('News', linkUrl('/blog', 'News'))->id;
$wanted[] = $navItem('Warum Platypus', $entryLink($pageId('warum-platypus'), 'Warum Platypus'))->id;

foreach (Entry::find()->section('mainNavigation')->id(['not', ...$wanted])->all() as $old) {
    $old->enabled = false;
    save($old);
    echo "navigation disabled: {$old->title}\n";
}
