<?php

namespace App\Controller;

use DateTime;

use App\Entity\Request;
use App\Models\LogModel;

class ClockController extends BaseController {

    /**
     * Route: GET /
     * 
     * render the template for the main interface
     */
    public function indexAction() {

        // Log the request
        $request = new Request(new DateTime(), "/");

        // Save the request to the database
        LogModel::instance()->addRequest($request);

        // render the base template
        echo $this->render("base.html.php");
    }

}