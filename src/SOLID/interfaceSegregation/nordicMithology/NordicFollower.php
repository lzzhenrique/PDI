<?php
namespace interfaceSeg;

class NordicFollower implements Follower
{
    protected $isDevote;

    public function __construct()
    {
        $this->isDevote = rand(1,9) === rand(1,9);
    }

    public function isDevote()
    {
        return $this->isDevote;
    }

    public function followerDevotion(){
        return $this->isDevote() ? rand(1, 10) : rand(5, 20);
    }
}


