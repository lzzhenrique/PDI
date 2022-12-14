<?php
namespace SOLID\openClosed;

class NordicGod extends God
{
    protected $humor;

    public function __construct()
    {
        $this->humor = rand(20, 100);
    }

    public function defineBless($followerDevotion){
        $this->humor += $followerDevotion;

        return $this->humor > 60 ? 'You be blessed!!!' : 'You be doomed!!!';
    }
}