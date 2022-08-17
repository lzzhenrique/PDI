<?php
namespace SOLID\openClosed;


class NordicFollower extends Follower
{
    protected $isDevote;

    public function __construct()
    {
        $this->isDevote = $this->defineFollowerDevotion();
    }

    public function defineFollowerDevotion()
    {
        return rand(1,9) === rand(1,9);
    }

    public function isDevote()
    {
        return $this->isDevote;
    }

    public function levelOfFollowerDevotion(){
        return $this->isDevote() ? rand(5, 20) : rand(0, 10);
    }
}
