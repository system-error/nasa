<?php


namespace nasa\Model;

use nasa\Model\Coordinate;
use nasa\Model\Direction;

class Rover
{
    private $cordinates;

    /**
     * @return Cordinates
     */
    public function getCordinates()
    {
        return $this->cordinates;
    }

    private $direction;

    /**
     * @return Direction
     */
    public function getDirection()
    {
        return $this->direction;
    }

    public function __construct($instractions)
    {
        $currentInstactions = explode(" ",$instractions);
        $this->cordinates = new Coordinate($currentInstactions[0],$currentInstactions[1]);
        $this->direction = new Direction($currentInstactions[2]);

    }


}