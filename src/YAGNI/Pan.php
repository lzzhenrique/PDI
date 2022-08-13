<?php

namespace YAGNI;

class Pan 
{
    protected $isWashed;

    public function cookFood($food)
    {
        $food->setIsCooked(true);

        return $food;
    }

    public function boilWater($water)
    {
        $water->setIsBoiled(true);

        return $water;
    }

    // Definitivamente, uma panela pode ser usada para bater em alguem,
    // mas está longe de ser necessario ter esse metodo ja implementado.
    public function bonkPeople($people)
    {
        $bodyPartToHit = $people->getRandomBodyPart();
        $bodyPartToHit->setIsHit(true);

        $people->inflictDamage($bodyPartToHit);
    }

    public function setIsWashed($isWashed)
    {
        $this->isWashed = $isWashed;

        echo $this->isWashed;
    }
}
