<?php

namespace SOLID\openClosed;

class Follower
{
    public function __construct()
    {
        $this->isDevote = $this->defineFollowerDevotion();
    }

    public function defineFollowerDevotion()
    {
        return rand(1,1000) === rand(1,1000);
    }

    public function levelOfFollowerDevotion(){
        return $this->isDevote() ? rand(1, 1000) : rand(1, 1000);
    }

    public function isDevote()
    {
        return $this->isDevote;
    }
}