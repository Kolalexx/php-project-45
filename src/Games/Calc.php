<?php

namespace BrainGames\src\Games\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\src\Engine\goPlay;

const ROUNDS = 3;

const CONDITION = 'What is the result of the expression?';

function randomNumbers()
{
    $minNumber = 2;
    $maxNumber1 = 20;
    return (rand($minNumber, $maxNumber1));
}

function startGameCalculator()
{
    $operations = ['+' => '+', '-' => '-', '*' => '*'];
    $questionsAndAnswers = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $randomNumber1 = randomNumbers();
        $randomNumber2 = randomNumbers();
        $operation = array_rand($operations);
        $result = 0;
        if ($operation === '+') {
            $question = "$randomNumber1 + $randomNumber2";
            $result = $result + $randomNumber1 + $randomNumber2;
        } elseif ($operation === '-') {
            $question = "$randomNumber1 - $randomNumber2";
            $result = $result + $randomNumber1 - $randomNumber2;
        } else {
            $question = ("$randomNumber1 * $randomNumber2");
            $result = ($result + $randomNumber1) * $randomNumber2;
        }
        $questionsAndAnswers[$question] = $result;
    }

    goPlay($questionsAndAnswers, $condition = CONDITION);
}
