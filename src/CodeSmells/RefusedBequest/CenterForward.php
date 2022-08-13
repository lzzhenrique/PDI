<?php

// This is gonna be used for a refused bequest example.
// https://refactoring.guru/pt-br/smells/refused-bequest
class CenterForward
{
    public function makeGoals()
    {
        return 'I make goals';
    }

    public function playOutsideOfArea()
    {
        return 'I am playing outside of the area, and make room in the area for the wingers';
    }

    public function playInsideOfArea()
    {
        return 'I am playing inside of the area, and make room in the front of the area for the midderfielders';
    }

    public function goodAirPlay()
    {
        return 'I can make powerfull head airplay';
    }
}
