<?php
namespace CodeSmells\MiddleMan;

class Bottle
{
    protected $water;
    
    public function giveWater()
    {
        if ($this->water > 0) {
            return $this->water;
        }
    }

    public function fillBottle()
    {
        $this->water = 100;
    }
}