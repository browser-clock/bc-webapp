<?php

namespace App\Controller;

use Base;
use Prefab;
use Template;

class BaseController extends Prefab {

    /**
     * @var Base
     */
    protected $f3;

    /**
     * BaseController constructor
     */
    public function __construct() {
        
        // initiate fatfree
        $this->f3 = Base::instance();
    }

    /**
     * render the template with the given name.
     * pass an assoc array as seconds parameter which will get passed to the view
     */
    public function render(string $templateName, array $params = []) {
        
        // Iterate over all parameters we should pass to the view
        foreach ($params as $key => $value) {
            $this->f3->set($key, $value);
        }

        // render the template
        return Template::instance()->render($templateName);
    }

}