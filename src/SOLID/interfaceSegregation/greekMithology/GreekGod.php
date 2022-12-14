<?php
namespace SOLID\interfaceSeg;

use SOLID\Interface\IGreekGod;

class GreekGod implements  IGreekGod
{
    protected $humor;

    public function __construct()
    {
        $this->humor = rand(1, 100);
    }

    public function speakGreek()
    {
        return 'ευχαριστώ για το PDI';
    }

    public function giveBless($followerDevotion){
        $this->humor += $followerDevotion;

        return $this->humor > 51 ? 'You be blessed!!!' : 'You be doomed!!!';
    }
}