<?php

namespace BrainGames\Menu;

use function cli\line;
use function cli\prompt;
use function cli\menu as cliMenu;
use function BrainGames\Calc\game as gameCalc;
use function BrainGames\Even\game as gameEven;
use function BrainGames\Gcd\game as gameGcd;
use function BrainGames\Prime\game as gamePrime;
use function BrainGames\Progression\game as gameProgression;

function menu()
{
    $menu = [
    	'BrainGames\Calc' => 'Calc',
        'BrainGames\Even' => 'Even',
        'BrainGames\Gcd' => 'Gcd',
        'BrainGames\Prime' => 'Prime',
        'BrainGames\Progression' => 'Progression',
        'quit' => 'Quit'
    ];
    $choice = cliMenu($menu, null, 'Choose the game');
    line();
    switch ($choice) {
    	case 'BrainGames\Calc':
    		return gameCalc();
    	case 'BrainGames\Even':
    		return gameEven();
    	case 'BrainGames\Gcd':
    		return gameGcd();
    	case 'BrainGames\Prime':
    		return gamePrime();
    	case 'BrainGames\Progression':
    		return gameProgression();
    	case 'quit':
    		exit;
    }
}