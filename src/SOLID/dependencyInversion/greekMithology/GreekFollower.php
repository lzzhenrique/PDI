<?php
namespace SOLID\dependencyInversion;

use SOLID\Dependency\IGreekFollower;

class GreekFollower implements  IGreekFollower
{
    protected $isDevote;

    public function __construct()
    {
        $this->isDevote = $this->defineFollowerDevotion();
    }

    public function defineFollowerDevotion()
    {
        return rand(1,12) === rand(1,12);
    }

    public function levelOfFollowerDevotion(){
        return $this->isDevote() ? rand(1, 16) : rand(1, 8 );
    }

    public function isDevote()
    {
        return $this->isDevote;
    }

    public function thankGod()
    {
        if ($this->isDevote()){
            return 'Thank godddd';
        }

        return 'Its diabo falt';
    }
}


