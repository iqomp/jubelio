<?php

/**
 * InvalidLoginException
 * @package iqomp/jubelio
 * @version 0.0.1
 */

namespace Iqomp\Jubelio\Exception;

class InvalidLoginException extends \Exception
{
    public function __construct() {
        parent::__construct('Invalid login data');
    }
}
