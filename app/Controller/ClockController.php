<?php

namespace App\Controller;

class ClockController extends BaseController {

    /**
     * Route: GET /
     * 
     * render the template for the main interface
     */
    public function indexAction() {
        $this->render("base.html.php");
    }

}