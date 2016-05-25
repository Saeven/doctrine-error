<?php

return [
    'router_class' => 'Zend\Mvc\Router\Http\TranslatorAwareTreeRouteStack',
    
    'routes' => [
        'test' => [
            'type' => 'Literal',
			'may_terminate' => true,
			'options' => [
				'route' => '/',
				'defaults' => [
					'controller' => 'Core\Controller\Index',
					'action' => 'index'
				]
			]
        ]
    ]
];