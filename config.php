<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'LdapRecord',
    'siteDescription' => 'Eloquent ActiveRecord for LDAP.',

    // Algolia DocSearch credentials
    'docsearchApiKey' => '4c517cbb86c1aa1895e06496448af038',
    'docsearchIndexName' => 'prod_LdapRecord',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
];