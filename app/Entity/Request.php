<?php

namespace App\Entity;

use DateTime;

class Request {

    /**
     * @var int
     */
    protected $id;

    /**
     * @var DateTime
     */
    protected $time;

    /**
     * @var string
     */
    protected $route;

    public function __construct(DateTime $time, string $route) {
        $this->time = $time;
        $this->route = $route;
    }

    /**
     * sets the id of the current object
     */
    public function setId(int $id) {
        $this->id = $id;
    }

    /**
     * get the id
     * 
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * get the time of the request
     * 
     * @return DateTime
     */
    public function getTime(): DateTime
    {
        return $this->time;
    }

    /**
     * get the route of the request
     * 
     * @return string
     */
    public function getRoute(): string
    {
        return $this->route;
    }

}