<?php
return array(
    'di' => array(
        'instance' => array(
            'alias' => array(
                'album' => 'Album\Controller\AlbumController',
            ),
            'Album\Controller\AlbumController' => array(
                'parameters' => array(
                    'albumTable' => 'Album\Model\AlbumTable',
                ),
            ),
            'Album\Model\AlbumTable' => array(
                'parameters' => array(
                    'config' => 'Zend\Db\Adapter\Mysqli',
            )),
            'Zend\Db\Adapter\Mysqli' => array(
                'parameters' => array(
                    'config' => array(
                        'host' => \getenv('zend_developer_cloud.db.host'),
                        'username' => \getenv('zend_developer_cloud.db.username'),
                        'password' => \getenv('zend_developer_cloud.db.password'),
                        'dbname' => \getenv('zend_developer_cloud.db.name'),
                    ),
                ),
            ),
            'Zend\View\PhpRenderer' => array(
                'parameters' => array(
                    'options'  => array(
                        'script_paths' => array(
                            'album' => __DIR__ . '/../views',
                        ),
                    ),
                ),
            ),
        ),
    ),
);