<?php

class GreekGod
{
    protected $humor;

    public function __construct()
    {
        $this->humor = rand(1, 100);
    }

    public function increaseHumor()
    {
        $this->humor += 15;
    }

    public function defineBless($isDevote){
        if($isDevote){
            $this->increaseHumor();
        }

        return $this->humor > 51 ? 'You be blessed!!!' : 'You be doomed!!!';
    }
}