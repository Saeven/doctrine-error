<?php

namespace Core\Listener;

use Locale;
use Zend\EventManager\AbstractListenerAggregate;
use Zend\EventManager\EventInterface;
use Zend\EventManager\EventManagerInterface;
use Zend\Mvc\MvcEvent;
use Zend\ServiceManager\ServiceLocatorInterface;

class RouteListener extends AbstractListenerAggregate {
	
	public function attach(EventManagerInterface $eventManager) {
		$this->listeners[] = $eventManager->attach(
			MvcEvent::EVENT_ROUTE, array($this, 'onRoute'), 100
		);
	}
    
    public function onRoute(EventInterface $event) {
        $app = $event->getTarget();
		$serviceManager = $app->getServiceManager();
                
        $this->setLocalization();
        $this->configureRouter($serviceManager);
    }
	
	protected function setLocalization() {
		Locale::setDefault('en-US');
	}
    
    protected function configureRouter(ServiceLocatorInterface $serviceManager) {
		$serviceManager->get('router')
            ->setTranslator($serviceManager->get('translator'))
            ->setTranslatorTextDomain('routes');
    }
	
}