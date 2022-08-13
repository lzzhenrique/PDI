<?php
namespace CodeSmells\MiddleMan;

class Body
{
    protected int $hydratationLevel = 30;

    public function hydrate(Bottle $bottle) : void
    {
        $bottle->fillBottle();
        $this->hydratationLevel = $bottle->giveWater();
    }
}