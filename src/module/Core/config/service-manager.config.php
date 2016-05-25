<?php

return [
    'invokables' => [
        'Core\Listener\Route' => 'Core\Listener\RouteListener'
    ],
    
    'factories' => [
        'Translator' => 'Zend\I18n\Translator\TranslatorServiceFactory'
    ]
];