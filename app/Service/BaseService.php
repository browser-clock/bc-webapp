<?php

namespace App\Service;

use Base;
use Prefab;

class BaseService extends Prefab {

    /**
     * @var Base
     */
    protected $f3;
    
    /**
     * BaseService Constructor
     */
    public function __construct() {

        // Initiate FatFree
        $this->f3 = Base::instance();
    }

}