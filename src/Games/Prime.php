<?php

namespace BrainGames\src\Games\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\src\Engine\goPlay;

const LEVELS = 3;

function randomNumbers()
{
    $minNumber = 2;
    $maxNumber1 = 50;
    return (rand($minNumber, $maxNumber1));
}

function checkIfNumberIsPrime()
{
    $questionsAndAnswers = [];
    $primeNumbers = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47];
    for ($i = 0; $i < LEVELS; $i++) {
        $question = randomNumbers();
        if (in_array($question, $primeNumbers, true)) {
            $questionsAndAnswers[$question] = 'yes';
        } else {
            $questionsAndAnswers[$question] = 'no';
        }
    }

    $condition = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    goPlay($questionsAndAnswers, $condition);
}
