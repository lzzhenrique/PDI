<?php

use SOLID\openClosed\God;

class GreekGod  extends God
{
    protected $humor;

    public function __construct()
    {
        $this->humor = rand(1, 100);
    }

    public function defineBless($followerDevotion){
        $this->humor += $followerDevotion;

        return $this->humor > 51 ? 'You be blessed!!!' : 'You be doomed!!!';
    }
}