<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper;
use Symfony\Component\Console\Helper\HelperSet;

require_once "vendor/autoload.php";

$f3 = Base::instance();
$f3->config("config.ini");

$db = $f3->get("DB");

$connection = DriverManager::getConnection([
    "host" => $db["HOSTNAME"],
    "user" => $db["USERNAME"],
    "password" => $db["PASSWORD"],
    "dbname" => $db["NAME"],
    "driver" => $db["DRIVER"],
]);

return new HelperSet([
    "db" => new ConnectionHelper($connection),
]);