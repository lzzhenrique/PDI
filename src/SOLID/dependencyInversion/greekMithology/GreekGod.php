<?php
namespace SOLID\interfaceSeg;

use SOLID\Dependency\IGreekFollower;
use SOLID\Interface\IGreekGod;
use SOLID\dependencyInversion\GreekFollower;
use SOLID\openClosed\Follower;

class GreekGod implements  IGreekGod
{
    protected $humor;
    protected $follower;

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

    public function verifyIfFollowerIsThanked(IGreekFollower $follower)
    {
        if($follower->thankGod() === 'Thank godddd'){
            return 'You will be blessed!!!';
        }
    }
}