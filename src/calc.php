<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\startGame;

const DESCRIPTION = "What is the result of the expression?";
const OPERATORS = ['+', '-', '*'];

function game()
{
    $getData = function () {
        $firstNumber = rand(1, 10);
        $secondNumber = rand(1, 10);
        $operator = OPERATORS[array_rand(OPERATORS)];
        $question = "$firstNumber $operator $secondNumber";
        switch ($operator) {
            case '+':
                $answer = (int)($firstNumber + $secondNumber);
                break;
            case '-':
                $answer = (int)($firstNumber - $secondNumber);
                break;
            case '*':
                $answer = (int)($firstNumber * $secondNumber);
                break;
        }
        return [$question, $answer];
    };
    startGame($getData, DESCRIPTION);
}
