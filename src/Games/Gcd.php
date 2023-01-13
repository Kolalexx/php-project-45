<?php

namespace BrainGames\src\Games\Gcd;

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

function findGreateasCommonDivisor()
{
    $arrayQuestion = [];
    $arrayRightAnswer = [];
    for ($i = 0; $i < LEVELS; $i++) {
        $randomNumber1 = randomNumbers1();
        $randomNumber2 = randomNumbers2();
        $result = 1;
        $question = "$randomNumber1 $randomNumber2";
        if ($randomNumber1 === $randomNumber2) {
            $result = $randomNumber1;
        } else {
            $greteasCommonDivisor = 1;
            while ($greteasCommonDivisor <= $randomNumber2) {
                if ($randomNumber1 % $greteasCommonDivisor === 0 && $randomNumber2 % $greteasCommonDivisor === 0) {
                    $result = $greteasCommonDivisor;
                    $greteasCommonDivisor += 1;
                } else {
                    $greteasCommonDivisor += 1;
                }
            }
        }
        $arrayQuestion[$i] = $question;
        $arrayRightAnswer[$i] = $result;
    }

    $condition = 'Find the greatest common divisor of given numbers.';

    goPlay($arrayQuestion, $arrayRightAnswer, $condition);
}
