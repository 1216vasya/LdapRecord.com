<?php

return [
    'Quickstart' => 'docs/laravel/quickstart',
    'Overview' => 'docs/laravel',
    'Installation' => 'docs/laravel/installation',
    'Usage' => 'docs/laravel/usage',
    'Authentication' => [
        'children' => [
            'Quickstart' => 'docs/laravel/auth/quickstart',
            'Overview' => 'docs/laravel/auth',
            'Installation' => 'docs/laravel/auth/installation',
            'Configuration' => 'docs/laravel/auth/configuration',
            'Usage' => 'docs/laravel/auth/usage',
            'Multi-Domain' => 'docs/laravel/auth/multi-domain',
        ]
    ],
    'License' => 'docs/laravel/license',
];
