<?php

namespace App\Controller;

use App\Service\LoggingService;

class ClockController extends BaseController {

    /**
     * Route: GET /
     * 
     * render the template for the main interface
     */
    public function indexAction() {

        // render the base template
        echo $this->render("base.html.php");
    }

}