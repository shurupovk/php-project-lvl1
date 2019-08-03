<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function run()
{
	line('Welcom to the Brain Games!');
	$name = prompt('May i have your name?');
	line("Hello, $name!");
}