<?php

return [
	'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => [
                    'host' => 'localhost',
                    'port' => '3306',
                    'user' => 'root',
                    'password' => 'password',
                    'dbname' => 'test',
                    'charset' => 'utf8',
                    'driverOptions' => [
                        1002 => 'SET NAMES utf8'
                    ],
                ],
            ],
        ],

        'configuration' => [
            'orm_default' => [
                'metadata_cache' => 'array',
                'query_cache' => 'array',
                'result_cache' => 'array',
                'hydration_cache' => 'array',

                'generate_proxies' => false,
            ]
        ]
    ]
];