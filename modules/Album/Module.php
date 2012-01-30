<?php

namespace Album;

use Zend\Module\Consumer\AutoloaderProvider,
    Zend\Config\Config;

class Module
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php'
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__
                ),
            ),
        );
    }
    
    public function getConfig()
    {
        return new Config(include __DIR__ . '/configs/module.config.php');
    }
}
