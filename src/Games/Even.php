<?php

namespace BrainGames\src\Games\Even;

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

function checkIfNumberIsEven()
{
    $questionsAndAnswers = [];
    for ($i = 0; $i < LEVELS; $i++) {
        $question = randomNumbers();
        if (($question % 2) === 0) {
            $questionsAndAnswers[$question] = 'yes';
        } else {
            $questionsAndAnswers[$question] = 'no';
        }
    }

    $condition = 'Answer "yes" if the number is even, otherwise answer "no".';

    goPlay($questionsAndAnswers, $condition);
}
