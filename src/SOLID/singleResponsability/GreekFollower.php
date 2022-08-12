<?php
namespace SOLID\singleResponsability;

class GreekFollower
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
}


