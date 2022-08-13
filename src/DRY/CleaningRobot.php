<?php

class CleaningRobot
{
    //This is not exactly a DRY example, because that doesnt have knowledge repetition,
    // just CODE repetition. This code smell bad, but not is a DRY example
    // Luiz
    public function washDishes($dishes)
    {
        $dishes['pan']->setIsWashed(true);
        $dishes['plate']->setIsWashed(true);
        $dishes['fork']->setIsWashed(true);
        $dishes['knife']->setIsWashed(true);
        $dishes['spoon']->setIsWashed(true);
        $dishes['bowl']->setIsWashed(true);
        $dishes['cups']->setIsWashed(true);
        $dishes['shell']->setIsWashed(true);
        $dishes['table']->setIsWashed(true);

        return $dishes;
    }
}