<?php


return array(

    'mode' => 'development',

    'baseurl' => 'http://api.test.dev',

    // lists the domains this app functions under, must be one called default
    // use a * for a wildcard subdomain
    'profiles' => array(
        'default' => array(
            'baseurl' => 'http://api.test.dev',
        )
    ),

    'uploads' => [
        'storage_path' => 'uploads'
    ],

    'assets' => '',

    'auth' => array(
        'persist_type' => 'cookie',	// can be either cookie, session or none
        'use_cookies' => true,
        'cookie' => array(
            'name' => getenv("COOKIE_NAME") ?: 'api_auth',
            'domain' => getenv("COOKIE_DOMAIN"),
            'path' => '/',
            'expires' => '+1 day',
            'secure' => getenv("COOKIE_SECURE") === "true",
            'httponly' => true
        )
    ),

    'ssl' => false,

    'email' => array(
        'transport'=> 'SENDMAIL',
        'fromname' => 'Test API',
        'fromaddr' => 'no-reply@example.com',
        'default_mimetype' => 'text/html'
    )
);
