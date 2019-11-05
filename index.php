<?php

require_once "vendor/autoload.php";

$f3 = Base::instance();

// load config files
$f3->config("app/config/config.cfg");

// config.ini after all other config files to prevent overriding user variables
$f3->config("config.ini");

$f3->run();