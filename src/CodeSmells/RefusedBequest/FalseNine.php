<?php

// This is gonna be a refused bequest example.
// https://refactoring.guru/pt-br/smells/refused-bequest
class FalseNine extends CenterForward
{
    public function makeGoals()
    {
        return 'I make goals';
    }

    public function playOutsideOfArea()
    {
        return 'I am playing outside of the area, and make room in the area for the wingers';
    }

    public function giveAssistences()
    {
        return 'I can distribute assistances to my teammates';
    }
}