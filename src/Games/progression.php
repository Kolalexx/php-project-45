<?php

namespace BrainGames\src\Games\Progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\src\Engine\goPlay;

const LEVELS = 3;

function randomNumbers1()
{
    $minNumber = 2;
    $maxNumber1 = 50;
    return (rand($minNumber, $maxNumber1));
}

function randomNumbers2()
{
    $minNumber = 1;
    $maxNumber2 = 9;
    return (rand($minNumber, $maxNumber2));
}

function findMissingNumberInProgression()
{
    $arrayQuestion = [];
    $arrayRightAnswer = [];
    for ($i = 0; $i < LEVELS; $i++) {
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
