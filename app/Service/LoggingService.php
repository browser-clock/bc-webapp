<?php

namespace App\Service;

use Log;

class LoggingService extends BaseService {

    /**
     * Log the request to the configures logging file
     */
    public function logRequest() {
        $logger = new Log($this->f3->get("logging")["filename"]);
        $logger->wite(date("[d:m:Y H:i:s] -> GET /"));
    }

}