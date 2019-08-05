<?php

namespace BrainGames\BrainEven;

use function BrainGames\Engine\startGame;

const DESCRIPTION = "Answer 'yes' if number is even otherwise answer 'no'";

function isEven($number)
{
    return $number % 2 === 0;
}

function game()
{
    $data = function () {
        $question = rand(1, 100);
        $answer = isEven($question) ? 'yes' : 'no';
        return ['question' => $question, 'answer' => $answer];
    };
    startGame($data, DESCRIPTION);
}
