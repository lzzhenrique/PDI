<?php
namespace Calisthenics\GoodExamples;

use Exception;

class GoodVitaminMaker
{
    /**
     * @throws Exception
     */
    public function makeVitamin($fruit, $milk, $ice)
    {
        $ingredientsAreValid = $this->verifyIngredients([$fruit, $milk, $ice]);

        if ($ingredientsAreValid) {
            return 'Vitamin';
        }

        return 'Vitamin not made';
    }

    /**
     * @throws Exception
     */
    public function quantityIsGreaterThanZero($ingredient)
    {
        if ($ingredient <= 0) {
            throw new Exception("Quantity of $ingredient is less than zero!");
        }
    }

    /**
     * @throws Exception
     */
    public function verifyIngredients($ingredients)
    {
        foreach ($ingredients as $ingredient) {
            $this->quantityIsGreaterThanZero($ingredient);
        }

        return true;
    }
}