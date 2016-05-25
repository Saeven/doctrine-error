<?php

$config = [
    'modules' => [
        // Vendor modules
        'DoctrineModule',
        'DoctrineORMModule',

        // Application modules
        'Core'
    ],

    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],

        'config_glob_paths' => [
            'config/autoload/local/{,*.}local.php',
			'config/autoload/global/{,*.}global.php'
        ],

        'cache_dir' => 'data/cache/module'
    ]
];

$localAppConfig = 'config/application.config.local.php';
if (is_readable($localAppConfig)) {
    $config = \Zend\Stdlib\ArrayUtils::merge($config, require($localAppConfig));
}

return $config;