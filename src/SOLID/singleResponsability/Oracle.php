<?php

namespace SOLID\singleResponsability;

class Oracle
{
    public function checkFollowerDevotion(GreekFollower $follower)
    {
        return $follower->isDevote() ? rand(1, 10) : rand(5, 20);
    }
}