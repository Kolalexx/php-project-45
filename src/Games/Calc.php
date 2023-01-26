<?php

namespace BrainGames\src\Games\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\src\Engine\goPlay;

use const BrainGames\src\Engine\ROUNDS;

const CONDITION = 'What is the result of the expression?';

function randomNumbers()
{
    $minNumber = 2;
    $maxNumber1 = 20;
    return (rand($minNumber, $maxNumber1));
}

function startGameCalculator()
{
    $operations = ['+', '-', '*'];
    $questionsAndAnswers = [];
    for ($i = 1; $i <= ROUNDS; $i++) {
        $randomNumber1 = randomNumbers();
        $randomNumber2 = randomNumbers();
        $operation = $operations[array_rand($operations)];
        switch ($operation) {
            case '+':
                $question = "$randomNumber1 + $randomNumber2";
                $result = $randomNumber1 + $randomNumber2;
                break;
            case '-':
                $question = "$randomNumber1 - $randomNumber2";
                $result = $randomNumber1 - $randomNumber2;
                break;
            default:
                $question = ("$randomNumber1 * $randomNumber2");
                $result = $randomNumber1 * $randomNumber2;
        }
        $questionsAndAnswers[$question] = $result;
    }

    goPlay($questionsAndAnswers, CONDITION);
}
