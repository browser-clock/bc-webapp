<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper;
use Symfony\Component\Console\Helper\HelperSet;

require_once "vendor/autoload.php";

// Initiate FatFree
$f3 = Base::instance();
$f3->config("config.ini");

// load the DB variables from config.ini
$db = $f3->get("DB");

// create connection
$connection = DriverManager::getConnection([
    "host" => $db["HOSTNAME"],
    "user" => $db["USERNAME"],
    "password" => $db["PASSWORD"],
    "dbname" => $db["NAME"],
    "driver" => $db["DRIVER"],
]);

// return connection
return new HelperSet([
    "db" => new ConnectionHelper($connection),
]);