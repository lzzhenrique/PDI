<?php

use SOLID\liskov\GreekGod;

class Apollo extends GreekGod
{
    public function giveBless($followerDevotion)
    {
            return 'You will be blessed!!!';
    }
}