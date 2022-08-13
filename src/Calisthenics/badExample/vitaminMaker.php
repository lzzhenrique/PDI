<?php
// Only One Level Of Indentation Per Method
// Don’t Use The ELSE Keyword
// Don’t Abbreviate
class vitaminMaker
{
    // $f = fruit quantity
    // $m = milk quantity
    // $i = ice quantity
    public function makeVitamin($f, $m, $i)
    {
        if ($f > 0) {
           if ($m > 0) {
               if ($i > 0) {
                   return 'Vitamin';
               }
           }
        } else {
            return 'Vitamin not made';
        }
    }
}