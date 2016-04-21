<?php

namespace Pdam\Calculator;

use Pdam\Behaviors\Addition\Complex as ComplexAdditionBehavior;
use Pdam\Behaviors\Division\Complex as ComplexDivisionBehavior;
use Pdam\Behaviors\Multiplication\Complex as ComplexMultiplicationBehavior;
use Pdam\Behaviors\Substraction\Complex as ComplexSubstractionBehavior;
use Pdam\Calculator;

class Complex extends Calculator
{
    public function __construct()
    {
        $additionBehavior = new ComplexAdditionBehavior();
        $divisionBehavior = new ComplexDivisionBehavior();
        $substractionBehavior = new ComplexSubstractionBehavior();
        $multiplicationBehavior = new ComplexMultiplicationBehavior();

        parent::__construct(
            $additionBehavior,
            $divisionBehavior,
            $substractionBehavior,
            $multiplicationBehavior
        );
    }
}
