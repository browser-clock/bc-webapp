<?php

namespace App\Service;

use Log;

class LoggingService extends BaseService {

    /**
     * Log the request to the configures logging file
     */
    public function logRequest() {
        $logger = new Log("log/requests.log");
        $logger->write("GET REQUEST to /");
    }

}