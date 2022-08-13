<?php

// in this example, is clear that the cat need to be a class, and not an array.


class catFinder
{
    protected $actualLocalization;
    
    public function trackCat(array $cat)
    {
        if (isset($cat['lastLocalization'])) {
            $this->goToCatLastLocalization($cat['lastLocalization']);
            $this->callForCat($cat['name']);


            return $this->isCatFinded();
        }

        return "Sorry, i'm not capable to find the cat";
    }

    public function goToCatLastLocalization($catLocalization)
    {
        $this->actualLocalization = $catLocalization;
    }

    public function callForCat($catName)
    {
        echo "I'm calling for $catName, at $this->actualLocalization";
    }

    public function isCatFinded()
    {
        rand(0, 100) > 45 ? 'Kitty finded' : 'Kitty not finded';
    }
}