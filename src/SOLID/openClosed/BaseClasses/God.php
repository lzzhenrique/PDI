<?php

namespace SOLID\openClosed;

class God
{
    public function __construct()
    {
        $this->humor = rand(1, 1000);
    }

    public function defineBless($followerDevotion){
        $this->humor += $followerDevotion;

        return $this->humor > 510 ? 'You be blessed!!!' : 'You be doomed!!!';
    }
}