<?php


namespace nasa\Model;

use nasa\Model\Coordinate;


class Border
{
    private $startPoint;
    private $currentPoint;

    /**
     * @return mixed
     */
    public function getStartPoint()
    {
        return $this->startPoint;
    }

    /**
     * @return mixed
     */
    public function getCurrentPoint()
    {
        return $this->currentPoint;
    }

    public function __construct(Coordinate $currentPoint)
    {
        $this->startPoint = new Coordinate(0,0);
        $this->currentPoint = $currentPoint;
    }

}