<?php
namespace nasa\Models;

class Coordinate{
    private $x;
    private $y;

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    public function __construct($x,$y)
    {
        $this->x = (int) $x;
        $this->y = (int) $y;
    }
}