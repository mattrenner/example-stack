<?php

return array(

    'databases' => array(
        'API' => array(
            'production' => array(
                'driver' => 'MySQL',
                'driver_options' => [
                    'timezone' => 'UTC'
                ],
                'host' => 'db',
                'port' => '3306',
                'username' => 'root',
                'password' => 'password123',
                'database' => 'api_development'
            ),
        ),

    ),
);
