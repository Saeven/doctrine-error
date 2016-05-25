<?php

namespace Core\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController  {
        
    public function indexAction() {
        $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        
        return [];
    }
    
}