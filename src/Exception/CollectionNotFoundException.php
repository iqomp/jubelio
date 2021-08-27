<?php

/**
 * CollectionNotFoundException
 * @package iqomp/jubelio
 * @version 0.0.1
 */

namespace Iqomp\Jubelio\Exception;

class CollectionNotFoundException extends \Exception
{
    public function __construct($name) {
        parent::__construct('Collection `' . $name . '` not found');
    }
}
