<?php

namespace Controllers;

use Wave\Log;
use Wave\Validator\Result;

/**
 * ~BaseRoute /
 */
class ExampleController extends BaseController {

    /**
     * ~Route GET, <int>example_id
     * ~Validate example-schema/get
     */
    public function getExample($example_id, Result $data) {

        $object = ['example' => $example_id];

        return $this->respond($object);
    }

    /**
     * ~Route POST, <int>example_id
     * ~Validate example-schema/set
     */
    public function saveExample($example_id, Result $data) {

        $object = ['example' => $example_id];

        return $this->respond($object);
    }


}