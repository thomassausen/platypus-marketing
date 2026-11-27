<?php
/**
 * Redesign 2026: content import
 *
 * Creates or updates the content of the customer's design exports:
 * footer texts, home page, packages, cases, "Angebot", "Cases & Referenzen",
 * "Warum Platypus", news topics and the article "Warum eine Positionierung
 * Belege braucht" (two further posts exist only as teasers and are created
 * disabled), and the main navigation (old items are disabled, not deleted).
 *
 * The script is idempotent: entries are found by title/slug and updated.
 * Exceptions: content builder blocks and the article's embedded elements
 * are replaced on every run.
 *
 * Usage (take a DB backup first):
 *   IMPORT_DIR=/path/to/files AUTHOR_USERNAME=<user> BOOKING_URL=<url> \
 *     php craft exec 'require "scripts/redesign-2026/import.php";'
 *
 *   IMPORT_DIR       folder with katrin-renatus.jpg, core-intelligence-clip.jpg,
 *                    core-intelligence-clip.mp4, core-intelligence-grafik.png,
 *                    innensicht-marktsicht.svg (default: storage/import/redesign-2026)
 *   AUTHOR_USERNAME  author of the imported posts; also receives photo and bio
 *                    for the author box (default: first admin, profile untouched)
 *   BOOKING_URL      target of "Erstgespräch buchen" (default: #kontakt)
 */

require __DIR__ . '/helpers.php';

$parts = glob(__DIR__ . '/parts/*.php');
sort($parts);
foreach ($parts as $part) {
    echo '--- ' . basename($part) . "\n";
    require $part;
}
echo "done\n";
