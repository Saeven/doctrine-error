<?php

return [
    'translation_file_patterns' => [
        // Default translations
        [
            'type' => 'gettext',
            'base_dir' => __DIR__ . '/../language/default',
            'pattern' => '%s.mo'
        ],
        
        // Route translations
        [
            'text_domain' => 'routes',
            'type' => 'gettext',
            'base_dir' => __DIR__ . '/../language/routes',
            'pattern' => '%s.mo'
        ]
    ]
];