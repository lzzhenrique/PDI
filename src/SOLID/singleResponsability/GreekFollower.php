<?php

class GreekFollower
{
    protected $isDevote;

    public function __construct()
    {
        $this->isDevote = $this->defineFollowerDevotion();
    }

    public function defineFollowerDevotion()
    {
        return rand(1,12) === rand(1,12);
    }

    public function isDevote()
    {
        return $this->isDevote;
    }
}


