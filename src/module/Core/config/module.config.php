<?php

namespace Core;

return [
    'service_manager' => include __DIR__ . '/service-manager.config.php',
    'router' => include __DIR__ . '/router.config.php',
    'view_manager' => include __DIR__ . '/view-manager.config.php',
    'translator' => include __DIR__ . '/translator.config.php',
    'hydrators' => include __DIR__ . '/hydrators.config.php',
    
    // @todo remove
    'controllers' => [
        'invokables' => [
            'Core\Controller\Index' => 'Core\Controller\IndexController'
        ]
    ]
];
