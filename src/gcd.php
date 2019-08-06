<?php

namespace BrainGames\Gcd;

use function BrainGames\Engine\startGame;

const DESCRIPTION = "What is the greatest divisor?\n";

function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : $b;
}

function game()
{
    $data = function () {
        $firstNumber = rand(1, 50);
        $secondNumber = rand(1, 50);
        $question = "$firstNumber $secondNumber";
        $answer = gcd($firstNumber, $secondNumber);
        return [$question, $answer];
    };
    startGame($data, DESCRIPTION);
}
