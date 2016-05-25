<?php

return array(

    'doctrine' => array(
        'configuration' => [
            'orm_default' => [

            ],
        ],
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => [
                    'host' => '127.0.0.1',
                    'port' => '3306',
                    'user' => 'user',
                    'password' => 'password',
                    'dbname' => 'database',
                    'driverOptions' => [                        
                        1002 => 'SET NAMES utf8',
                    ],
                ],
            )
        )
    ),
);