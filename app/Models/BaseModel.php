<?php

namespace App\Models;

use Base;
use Doctrine\DBAL\DriverManager;
use Prefab;

class BaseModel extends Prefab
{

    /**
     * @var Base
     */
    protected $f3;

    /**
     * @var \Doctrine\DBAl\Connection
     */
    protected $connection;

    public function __construct()
    {
        // Initiate FatFree
        $this->f3 = Base::instance();

        $db = $this->f3->get("DB");

        // Initiate connection
        $this->connection = DriverManager::getConnection([
            "host" => $db["HOSTNAME"],
            "user" => $db["USERNAME"],
            "password" => $db["PASSWORD"],
            "dbname" => $db["NAME"],
            "driver" => $db["DRIVER"],
        ]);
    }

    /**
     * return fresh query builder from connection
     * 
     * @return \Doctrine\DBAL\Query\QueryBuilder
     */
    public function getQueryBuilder()
    {
        return $this->connection->createQueryBuilder();
    }
}
