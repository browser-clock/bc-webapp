<?php

require_once "vendor/autoload.php";

$f3 = Base::instance();

$f3->config("app/config/config.cfg");

$f3->run();