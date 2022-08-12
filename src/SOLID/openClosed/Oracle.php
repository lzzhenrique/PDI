<?php

namespace SOLID;

class Oracle
{
    public function checkFollowerDevotion($follower)
    {
        return $follower->followerDevotion();
    }
}