<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function startGame($data, $description)
{
    line("$description\n");
    $numberOfGames = (int)prompt('Type a number of rounds');
    $correctAnswers = 0;
    for ($i = 0; $i < $numberOfGames; $i++) {
        [$question, $answer] = $data();
        line("Question: $question");
        $userAnswer = prompt("Your answer");
        if ($userAnswer == $answer) {
            $correctAnswers++;
            line("Correct!");
        } else {
            line("Wrong! Correct answer was $answer");
        }
    }
    if ($numberOfGames === $correctAnswers) {
        line('Congratulations! You answered all correctly!');
    } else {
        line("You answered $correctAnswers / $numberOfGames correctly! Try better next time!");
    }
}
