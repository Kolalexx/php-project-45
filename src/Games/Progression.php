<?php

namespace BrainGames\src\Games\Progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\src\Engine\goPlay;

use const BrainGames\src\Engine\ROUNDS;

const LENGTHPROGRESSION = 8;

const CONDITION = 'What number is missing in the progression?';

function randomNumbers1()
{
    $minNumber = 2;
    $maxNumber1 = 50;
    return (rand($minNumber, $maxNumber1));
}

function randomNumbers2()
{
    $minNumber = 1;
    $maxNumber2 = (LENGTHPROGRESSION - 1);
    return (rand($minNumber, $maxNumber2));
}

function startGameFindMissingNumberInProgression()
{
    $questionsAndAnswers = [];
    for ($i = 1; $i <= ROUNDS; $i++) {
        $randomNumber1 = randomNumbers1();
        $randomNumber2 = randomNumbers2();
        $randomNumber3 = randomNumbers2();
        $progression = [];
        for ($j = 0; $j < LENGTHPROGRESSION; $j++) {
            $progression[$j] = $randomNumber1 + $j * $randomNumber2;
        }
        $missingNumber = $progression[$randomNumber3];
        $progression[$randomNumber3] = '..';
        $question = implode(' ', $progression);
        $questionsAndAnswers[$question] = $missingNumber;
    }

    goPlay($questionsAndAnswers, CONDITION);
}
