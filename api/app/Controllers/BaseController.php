<?php

namespace Controllers;

use Wave\Controller;
use Wave\Core;
use Wave\Debug;
use Wave\Log;

class BaseController extends Controller {

    public $_input_errors = array();

    public static function getUpdateValidation($dir) {
        // merge create and get to make update
        $updateSchema = include $dir.'/get.php';
        $createSchema = include $dir.'/create.php';

        foreach($createSchema['fields'] as $name => $data){
            $updateSchema['fields'][$name] = $data;
            $updateSchema['fields'][$name]['required'] = false;
        }
        if (isset($createSchema['aliases'])) {
            foreach($createSchema['aliases'] as $name => $data){
                $updateSchema['aliases'][$name] = $data;
            }
        }
        return $updateSchema;
    }

}