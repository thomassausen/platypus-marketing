<?php
/**
 * Site URL Rules
 *
 * You can define custom site URL rules here, which Craft will check in addition
 * to routes defined in Settings → Routes.
 *
 * Read about Craft’s routing behavior (and this file’s structure), here:
 * @link https://craftcms.com/docs/5.x/system/routing.html
 */

// Old URLs of the pre-2026 site → 301 to their new pages (see templates/_redirect.twig).
// These rules only apply once the old pages are disabled or deleted, because
// existing entry URIs take precedence over URL rules.
$redirects = [
    'was-wir-tun' => '/angebot',
    'was-wir-tun/markenstrategie' => '/angebot/origo',
    'was-wir-tun/content-marketing' => '/angebot/compass',
    'was-wir-tun/social-media' => '/angebot/compass',
    'was-wir-tun/websites' => '/angebot/nexus',
    'ueber-uns' => '/warum-platypus',
];

return array_merge([
    'sitemap.xml' => ['template' => 'sitemap.xml'],
], array_map(fn($target) => ['template' => '_redirect', 'variables' => ['target' => $target]], $redirects));
