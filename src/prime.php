<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\startGame;

const DESCRIPTION = "Answer 'yes' if number is prime otherwise answer 'no'";

function isPrime($number)
{
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function game()
{
    $data = function () {
        $question = rand(1, 100);
        $answer = isPrime($question) ? 'yes' : 'no';
        return [$question, $answer];
    };
    startGame($data, DESCRIPTION);
}
