<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
protected function _initRoutes()
{
    $frontController = Zend_Controller_Front::getInstance();
    $router = $frontController->getRouter();
    $router->removeDefaultRoutes();
    $router->addRoute(
        'fullRoute',
        new Zend_Controller_Router_Route('/:lang/:module/:controller/:action',
            array('lang' => ':lang')
        )
    );
    $router->addRoute(
        'languageControllerAction',
        new Zend_Controller_Router_Route('/:lang/:controller/:action',
            array('lang' => ':lang')
        )
    );
    $router->addRoute(
        'language',
        new Zend_Controller_Router_Route('/:lang',
            array('lang' => 'en',
                'module' => 'default',
                'controller' => 'index',
                'action' => 'index'
            )
        )
    );
    $router->addRoute(
        'languageController',
        new Zend_Controller_Router_Route('/:lang/:controller',
            array('lang' => 'en',
                'module' => 'default',
                'controller' => 'index',
                'action' => 'index'
            )
        )
    );
}
}