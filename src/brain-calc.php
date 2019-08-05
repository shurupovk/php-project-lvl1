<?php

namespace BrainGames\BrainCalc;

use function cli\line;
use function cli\prompt;

const DESCRIPTION = "Answer 'yes' if number is even otherwise answer 'no'";
const OPERATORS = ['+', '-', '*'];

function startGame()
{
	line(DESCRIPTION);
	$numberOfGames = (int)prompt('Type a number of rounds');
	$correctAnswers = 0;
	for ($i = 0; $i < $numberOfGames; $i++) {
		$firstNumber = rand(1, 10);
		$secondNumber = rand(1, 10);
		$operator = OPERATORS[array_rand(OPERATORS)];
		$question = "$firstNumber $operator $secondNumber";
		line("Question: $question");
		$userAnswer = (int)prompt('Your answer');
		if ($operator === '+') {
			$answer = (int)($firstNumber + $secondNumber);
		} elseif ($operator === '-')
		{
			$answer = (int)($firstNumber - $secondNumber);
		} elseif ($operator === '*') {
			$answer = (int)($firstNumber * $secondNumber);
		}
		if ($userAnswer === $answer) {
			$correctAnswers++;
			line("Correct! $correctAnswers");
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
