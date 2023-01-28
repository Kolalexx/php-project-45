<?php

namespace BrainGames\src\Games\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\src\Engine\goPlay;

use const BrainGames\src\Engine\ROUNDS_COUNT;

const CONDITION = 'What is the result of the expression?';

function randomNumbers()
{
    $minNumber = 2;
    $maxNumber1 = 20;
    return (rand($minNumber, $maxNumber1));
}

function calculate(int $randomNumber1, int $randomNumber2, string $operation)
{
    switch ($operation) {
        case '+':
            $result = $randomNumber1 + $randomNumber2;
            break;
        case '-':
            $result = $randomNumber1 - $randomNumber2;
            break;
        default:
            $result = $randomNumber1 * $randomNumber2;
        }
    return $result;
}

function startGameCalculator()
{
    $operations = ['+', '-', '*'];
    $questionsAndAnswers = [];
    for ($index = 1; $index <= ROUNDS_COUNT; $index++) {
        $randomNumber1 = randomNumbers();
        $randomNumber2 = randomNumbers();
        $operation = $operations[array_rand($operations)];
        $question = "$randomNumber1 $operation $randomNumber2";
        $questionsAndAnswers[$question] = calculate($randomNumber1, $randomNumber2, $operation);
    }

    goPlay($questionsAndAnswers, CONDITION);
}
