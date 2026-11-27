<?php
use craft\elements\Asset;
use craft\elements\Entry;
use craft\elements\User;

$e = Entry::find()->section('footer')->one();
$e->setFieldValues([
    'topbarText' => 'Positionierungsberatung für Personalberatungen und Executive-Search-Boutiquen',
    'footerClaim' => 'Positionierung, die ankommt.',
    'ctaLabel' => 'Next',
    'ctaHeading' => 'Der nächste Schritt ist ein Gespräch – ehrlich, ohne Verkaufsdruck.',
    'ctaText' => '<p>Wir prüfen gemeinsam, ob Ihre Beratung von einer datenbasierten Positionierung profitiert und welcher Einstieg passt.</p>',
    'ctaButton' => ['type' => 'url', 'value' => '/warum-platypus#kontakt', 'label' => 'Gespräch vereinbaren'],
    'newsletterText' => 'Positionierung im KI-Zeitalter – Analysen und Branchendaten, einmal im Monat.',
    'sourcesLabel' => 'Datenbasis aus 56 anerkannten Quellen, u. a.',
    'sources' => array_map(fn($t) => ['text' => $t], ['ifo', 'EZB', 'Interbrand', 'Deloitte', 'MIT', 'GfK']),
    'headerButton' => ['type' => 'url', 'value' => '/warum-platypus#kontakt', 'label' => 'Kontakt'],
]);
save($e);
echo "footer\n";
