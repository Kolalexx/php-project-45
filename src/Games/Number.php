<?php

namespace BrainGames\src\Games\Number;

use function cli\line;
use function cli\prompt;
use function BrainGames\src\Engine\goPlay;
use function BrainGames\src\Engine\randomNumbers1;

function checkIfNumberIsEven()
{
    $arrayQuestion = [];
    for ($i = 0; $i < 3; $i++) {
        $randomNumber = randomNumbers1();
        $arrayQuestion[$i] = $randomNumber;
    }

    $arrayRightAnswer = [];
    for ($j = 0; $j < 3; $j++) {
        if (($arrayQuestion[$j] % 2) === 0) {
            $arrayRightAnswer[$j] = 'yes';
        } else {
            $arrayRightAnswer[$j] = 'no';
        }
    }

    $condition = 'Answer "yes" if the number is even, otherwise answer "no".';
    
    goPlay($arrayQuestion, $arrayRightAnswer, $condition);
}
