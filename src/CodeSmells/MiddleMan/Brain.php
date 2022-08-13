<?php

use CodeSmells\MiddleMan\Body;
use CodeSmells\MiddleMan\Bottle;


// In this example, the Brain is a MiddleMan. The only thing that the Brain does is to call the Body, and use his method.
// And if we stop to think, we will se that the Body is fully capable of doing this job alone.
class Brain
{
    public function drinkWaterAction(Bottle $bottle, Body $body)
    {
        $body->hydrate($bottle);
    }
}