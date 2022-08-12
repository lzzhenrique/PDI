<?php
namespace SOLID\liskov;

class GreekFollower implements Follower
{
    protected $isDevote;

    public function __construct()
    {
        $this->isDevote = rand(1,12) === rand(1,12);
    }

    public function isDevote()
    {
        return $this->isDevote;
    }

    public function followerDevotion(){
        return $this->isDevote() ? rand(1, 15) : rand(5, 13);
    }
}


