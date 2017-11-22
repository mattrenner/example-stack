<?php

use Wave\Hook;
use Wave\Http\Request;
use Wave\Router;

include_once('../bootstrap.php');

if(\Wave\Config::get('deploy')->ssl === true){
    if(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on'){
        \Wave\Utils::redirect('https://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
        exit();
    }
}

if($_SERVER['REQUEST_METHOD'] == "OPTIONS") {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Content-Length, Authorization, Accept');

    header('Access-Control-Max-Age: 1728000');
    header("Content-Length: 0");
    header("Content-Type: text/plain");
    exit(0);
}

$request = Request::createFromGlobals();
Application::authByToken($request);

header('Access-Control-Allow-Origin: *');

$response = Router::init('default')->route($request);
$response->send();