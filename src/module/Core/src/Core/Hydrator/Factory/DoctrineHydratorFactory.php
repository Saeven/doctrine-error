<?php

namespace Core\Hydrator\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

class DoctrineHydratorFactory implements FactoryInterface {
	
	public function createService(ServiceLocatorInterface $formElementManager) {
		$serviceLocator = $formElementManager->getServiceLocator();
		$objectManager = $serviceLocator->get('Doctrine\ORM\EntityManager');

		return new DoctrineHydrator($objectManager);
	}
	
}