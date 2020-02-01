<?php


namespace nasa\Model;


class Direction
{
    const NORTH = "N";
    const WEST = "W";
    const EAST = "E";
    const SOUTH = "S";

    private $startOrientation = "";

    /**
     * @return string
     */
    public function getStartOrientation()
    {
        return $this->startOrientation;
    }

    /**
     * Direction constructor.
     * @param string $theOrientation
     */
    public function __construct(string $theOrientation)
    {
        $theOrientation = trim($theOrientation);
        if($this->giveMeValidOrientation($theOrientation)){
            $this->startOrientation = $theOrientation;
            return;
        }else{
            echo ("You gave wrong orientation");
        }

    }

    private function giveMeValidOrientation($orientation){
        $orientations = array(self::NORTH,self::WEST,self::EAST,self::SOUTH);

        if (in_array($orientation,$orientations)){
            return true;
        }else{
            return false;
        }

    }


}