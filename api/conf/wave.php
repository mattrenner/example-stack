<?php


return array(

    'controller' => array(
        'default_method' => 'execute',
    ),

    'response' => array(
        'default_format' => 'json'
    ),

    'logger' => array(
        'file' => array(
            'level' => \Monolog\Logger::DEBUG,
            'file' => 'error.log'
        ),
        'cli' => array(
            'level' => \Monolog\Logger::INFO
        )
    ),

    'path' => array(
        'cache' 		=> SYS_ROOT . 'cache' . DS,
        'config' 		=> SYS_ROOT . 'conf' . DS,
        'libraries'		=> SYS_ROOT . 'lib' . DS,
        'logs'			=> SYS_ROOT . 'logs' . DS,
        'bin'           => SYS_ROOT . 'bin' . DS,
        'migrations'    => SYS_ROOT . 'bin/migrate' . DS,

        'controllers'	=> APP_ROOT . 'Controllers'. DS,
        'models'		=> APP_ROOT . 'Models' . DS,
        'schemas'		=> APP_ROOT . 'schemas' . DS,
        'views'			=> APP_ROOT . 'views' . DS,
    ),


    'router' => array(
        'cache_file' 		=> 'routes',
        'auth' => array(
            'enabled'	=> true,
            'controller'=> 'AuthController'
        ),
        'base' => array(
            'methods' => array('json')
        )
    ),

    'model' => array(
        'base_namespace' => 'Models'
    ),

    'schemas' => array(
        'file_format' => '%s.php'
    ),

    'view' => array(
        'cache' 		=> SYS_ROOT . 'cache' . DS . 'views' . DS,
        'extension'		=> '.phtml'
    )


);
