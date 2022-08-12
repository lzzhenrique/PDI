<?php
namespace SOLID\singleResponsability;


class GreekGod
{
    protected $humor;

    public function __construct()
    {
        $this->humor = rand(1, 100);
    }

    public function giveBless($followerDevotion){
        $this->humor += $followerDevotion;

        return $this->humor > 51 ? 'You be blessed!!!' : 'You be doomed!!!';
    }
}