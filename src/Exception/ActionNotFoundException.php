<?php

/**
 * ActionNotFoundException
 * @package iqomp/jubelio
 * @version 0.0.1
 */

namespace Iqomp\Jubelio\Exception;

class ActionNotFoundException extends \Exception
{
    public function __construct($name, $collection) {
        parent::__construct('Action `' . $name . '` not found under collection `' . $collection . '`');
    }
}
