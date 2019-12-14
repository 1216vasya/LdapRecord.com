<?php

return [
    'Getting Started' => [
        'children' => [
            'Installation' => 'docs/installation',
            'Configuration' => 'docs/configuration',
            'Connecting' => 'docs/connections',
        ],
    ],
    'Models' => [
        'children' => [
            'Getting Started' => 'docs/models',
            'Relationships' => 'docs/model-relationships',
            'Accessors & Mutators' => 'docs/model-mutators',
        ],
    ],
    'Searching' => [
        'url' => 'docs/searching',
        'children' => [
            'Events' => 'docs/events',
            'Logging' => 'docs/logging',
        ],
    ],
    'Tutorials' => [
        'children' => [
            'ActiveDirectory' => [
                'children' => [
                    'User Management' => 'docs/user-management',
                ],
            ]
        ],
    ],
];