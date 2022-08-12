<?php
namespace SOLID\liskov;

class NordicGod implements God
{
    protected $humor;

    public function __construct()
    {
        $this->humor = rand(20, 100);
    }

    public function giveBless($followerDevotion){
        $this->humor += $followerDevotion;

        return $this->humor > 60 ? 'You be blessed!!!' : 'You be doomed!!!';
    }
}