<?php
namespace interfaceSeg;

use SOLID\INordicGod;

class NordicGod implements INordicGod
{
    protected $humor;

    public function __construct()
    {
        $this->humor = rand(20, 100);
    }

    public function speakOldNorse()
    {
        return 'takk for PDI!!!!!';
    }

    public function giveBless($followerDevotion){
        $this->humor += $followerDevotion;

        return $this->humor > 60 ? 'You be blessed!!!' : 'You be doomed!!!';
    }
}