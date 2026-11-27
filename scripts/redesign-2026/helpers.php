<?php
/**
 * Helpers for the redesign 2026 content import (see import.php).
 */

use craft\elements\Asset;
use craft\elements\Entry;
use craft\elements\User;
use craft\helpers\ElementHelper;

/** Saves an element or throws with its validation errors. */
function save($element)
{
    if (!Craft::$app->elements->saveElement($element)) {
        throw new Exception(get_class($element) . ' "' . ($element->title ?? $element->id) . '": ' . json_encode($element->getErrors(), JSON_UNESCAPED_UNICODE));
    }
    return $element;
}

/** Returns the asset with this filename, uploading it from IMPORT_DIR into the "images" volume if missing. */
function asset(string $file, string $title, ?string $alt = null): Asset
{
    if ($existing = Asset::find()->filename($file)->one()) {
        return $existing;
    }
    $source = rtrim(getenv('IMPORT_DIR') ?: Craft::getAlias('@storage/import/redesign-2026'), '/') . '/' . $file;
    if (!is_file($source)) {
        throw new Exception("Asset file missing: $source");
    }
    $temp = sys_get_temp_dir() . '/' . uniqid() . '-' . $file;
    copy($source, $temp);
    $volume = Craft::$app->volumes->getVolumeByHandle('images');
    $asset = new Asset([
        'tempFilePath' => $temp,
        'filename' => $file,
        'title' => $title,
        'alt' => $alt,
        'volumeId' => $volume->id,
        'newFolderId' => Craft::$app->assets->getRootFolderByVolumeId($volume->id)->id,
        'avoidFilenameConflicts' => true,
    ]);
    $asset->setScenario(Asset::SCENARIO_CREATE);
    save($asset);
    echo "asset: $file\n";
    return $asset;
}

/** Finds an entry by title in a section or creates it; sets the given field values. */
function entryIn(string $section, string $type, string $title, array $fields): Entry
{
    $sectionModel = Craft::$app->entries->getSectionByHandle($section);
    $entry = Entry::find()->section($section)->title($title)->status(null)->one() ?? new Entry([
        'sectionId' => $sectionModel->id,
        'typeId' => Craft::$app->entries->getEntryTypeByHandle($type)->id,
        'slug' => ElementHelper::generateSlug($title, true),
    ]);
    $entry->title = $title;
    $entry->setFieldValues($fields);
    save($entry);
    echo "$section: $title\n";
    return $entry;
}

/** Creates or updates a page (section "pages") and replaces its content builder. */
function page(string $slug, string $title, array $blocks): Entry
{
    $section = Craft::$app->entries->getSectionByHandle('pages');
    $page = Entry::find()->section('pages')->slug($slug)->status(null)->one()
        ?? new Entry(['sectionId' => $section->id, 'typeId' => $section->getEntryTypes()[0]->id, 'slug' => $slug]);
    $page->title = $title;
    $items = [];
    foreach ($blocks as $i => [$type, $fields]) {
        $items['new' . ($i + 1)] = ['type' => $type, 'enabled' => true, 'fields' => $fields];
    }
    $page->setFieldValue('contentBuilder', $items);
    save($page);
    echo "page: {$page->url}\n";
    return $page;
}

/** Nested entries (Matrix) from a list of field arrays; a "title" key becomes the entry title. */
function nested(array $items, string $type): array
{
    $out = [];
    foreach ($items as $i => $fields) {
        $title = $fields['title'] ?? null;
        unset($fields['title']);
        $out['new' . ($i + 1)] = array_filter(['type' => $type, 'enabled' => true, 'title' => $title, 'fields' => $fields], fn($v) => $v !== null);
    }
    return $out;
}

/** The user that authors imported posts: AUTHOR_USERNAME or the first admin. */
function authorUser(): User
{
    $username = getenv('AUTHOR_USERNAME');
    $user = $username ? User::find()->username($username)->one() : User::find()->admin()->one();
    return $user ?? throw new Exception('Author user not found');
}

/** Creates or updates a blog post. */
function post(string $title, string $slug, array $fields, string $date, bool $enabled = true): Entry
{
    $blog = Craft::$app->entries->getSectionByHandle('blog');
    $post = Entry::find()->section('blog')->slug($slug)->status(null)->one()
        ?? new Entry(['sectionId' => $blog->id, 'typeId' => $blog->getEntryTypes()[0]->id, 'slug' => $slug]);
    $post->title = $title;
    $post->postDate = new DateTime($date);
    $post->enabled = $enabled;
    $post->setAuthorIds([authorUser()->id]);
    $post->setFieldValues($fields);
    return save($post);
}

/** Creates an entry nested in a post's CKEditor field and returns its <craft-entry> tag. */
function nestedIn(Entry $owner, string $type, array $fields): string
{
    $entry = new Entry([
        'fieldId' => Craft::$app->fields->getFieldByHandle('blogContent')->id,
        'ownerId' => $owner->id,
        'primaryOwnerId' => $owner->id,
        'typeId' => Craft::$app->entries->getEntryTypeByHandle($type)->id,
    ]);
    $entry->setFieldValues($fields);
    save($entry);
    return '<craft-entry data-entry-id="' . $entry->id . '"></craft-entry>';
}

function linkUrl(string $value, string $label): array
{
    return ['type' => 'url', 'value' => $value, 'label' => $label];
}

function rowsText(array $items): array
{
    return array_map(fn($text) => ['text' => $text], $items);
}

function rowsPair(array $items): array
{
    return array_map(fn($pair) => ['title' => $pair[0], 'text' => $pair[1] ?? ''], $items);
}

function rowsMixed(array $items): array
{
    return array_map(fn($item) => is_array($item) ? ['title' => $item[0], 'text' => $item[1] ?? ''] : ['text' => $item], $items);
}

function faqItems(array $items): array
{
    return nested(array_map(fn($q) => ['question' => $q[0], 'answer' => '<p>' . $q[1] . '</p>'], $items), 'faqItem');
}

function serviceItems(array $items): array
{
    return nested(array_map(fn($b) => ['title' => $b[0], 'description' => $b[1], 'result' => $b[2], 'format' => $b[3]], $items), 'packageService');
}

function caseSection(string $label, string $heading, array $paragraphs, array $items = [], string $style = 'plain'): array
{
    return [
        'subtitle' => $label,
        'heading' => $heading,
        'text' => implode('', array_map(fn($p) => "<p>$p</p>", $paragraphs)),
        'items' => rowsPair($items),
        'sectionStyle' => $style,
    ];
}
