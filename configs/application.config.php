<?php
return array(
    'module_paths' => array(
        realpath(__DIR__ . '/../modules'),
    ),
    'modules' => array(
        'Application',
        'Album',
    ),
    'module_listener_options' => array( 
        'config_cache_enabled'     => false,
        'cache_dir'                => realpath(__DIR__ . '/../data/cache'),
    ),
);
