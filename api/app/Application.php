<?php

use Wave\Auth;
use Wave\Config;
use Wave\Core;
use Wave\Exception;
use Wave\Http\Request;

class Application extends Core {

    public static function bootstrap(array $config) {

        Config::init($config['config_dir']);

        Exception::register('\\Controllers\\ExceptionController');
        
        parent::bootstrap($config);
    }

    public static function authByToken(Request $request) {
        $token = $request->server->get('PHP_AUTH_PW', false);

        /** Example of how you would do authentication **/
        /**
        if (!empty($token)) {
            $session = Session::validate($token);
            if ($session instanceof Session) {
                $request->setAuthorization($session);
                Auth::registerIdentity($session->user_id);
            }
        } **/
    }
    
}
