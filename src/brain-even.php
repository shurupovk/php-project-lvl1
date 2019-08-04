<?php

namespace BrainGames\BrainEven;

use function cli\line;
use function cli\prompt;

const RULES = "Answer 'yes' if number is even otherwise answer 'no'";

function isEven($number)
{
	return $number % 2 === 0;
}

function startGame() {
	line(RULES);
	$numberOfGames = (int)prompt('Type a number of rounds: ');
	$rightAnswers = 0;
	for ($i = 0; $i < $numberOfGames; $i++)
	{
		$number = rand(1, 100);
		line("Question: $number");
		$parityOfNumber = isEven($number) ? 'yes' : 'no';
		$answer = prompt('Your answer: ');
		if ($answer === $parityOfNumber) {
			line('Correct!');
			$rightAnswers++;
		} else {
			line("Wrong! Correct answer was '$parityOfNumber'.");
		}
	}
	if ($numberOfGames === $rightAnswers) {
		line('Congratulations! You answered all correctly!');
	} else {
		line("You answered $rightAnswers / $numberOfGames correctly! Try better next time!");
	}
}