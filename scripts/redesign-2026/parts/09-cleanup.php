<?php
use craft\elements\Entry;

// Old pages of the pre-2026 site (URLs redirect via config/routes.php) and
// the navigation items that are no longer used. Deleted softly (trash).
$oldPages = ['was-wir-tun/markenstrategie', 'was-wir-tun/content-marketing', 'was-wir-tun/social-media', 'was-wir-tun/websites', 'was-wir-tun', 'ueber-uns'];
foreach ($oldPages as $uri) {
    if ($page = Entry::find()->section('pages')->uri($uri)->status(null)->one()) {
        Craft::$app->elements->deleteElement($page) or throw new Exception("could not delete $uri");
        echo "deleted page: $uri\n";
    }
}
foreach (Entry::find()->section('mainNavigation')->status('disabled')->all() as $item) {
    Craft::$app->elements->deleteElement($item) or throw new Exception("could not delete navigation item {$item->title}");
    echo "deleted navigation item: {$item->title}\n";
}
