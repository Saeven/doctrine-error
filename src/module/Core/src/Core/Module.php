<?php

namespace Core;

use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module 
implements ConfigProviderInterface, BootstrapListenerInterface, AutoloaderProviderInterface {
	
	public function getConfig() {
		return include __DIR__ . '/../../config/module.config.php';
	}
    
    public function getAutoloaderConfig() {
		return [
			'Zend\Loader\StandardAutoloader' => [
				'namespaces' => [
					__NAMESPACE__ => __DIR__
				]
			]
		];
	}
    
    public function onBootstrap(EventInterface $event) {
		$application = $event->getApplication();
		$eventManager = $application->getEventManager();
		$serviceManager = $application->getServiceManager();
        
		$eventManager->attach($serviceManager->get('Core\Listener\Route'));
	}

}
