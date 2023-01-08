<?php

namespace BrainGames\src\Games\progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\src\Engine\goPlay;
use function BrainGames\src\Engine\randomNumbers1;
use function BrainGames\src\Engine\randomNumbers2;

function findMissingNumberInProgression()
{
    $arrayQuestion = [];
    $arrayRightAnswer = [];
    for ($i = 0; $i < 3; $i++) {
        $randomNumber1 = randomNumbers1();
        $randomNumber2 = randomNumbers2();
        $randomNumber3 = randomNumbers2();
        $progression = [];
        for ($j = 0; $j < 10; $j++) {
            $progression[$j] = $randomNumber1 + $j * $randomNumber2;
        }
        $missingNumber = $progression[$randomNumber3];
        $progression[$randomNumber3] = '..';
        $question = implode(' ', $progression);
        $arrayQuestion[$i] = $question;
        $arrayRightAnswer[$i] = $missingNumber;
    }

    $condition = 'What number is missing in the progression?';

    goPlay($arrayQuestion, $arrayRightAnswer, $condition);
}
