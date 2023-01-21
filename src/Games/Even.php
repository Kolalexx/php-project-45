<?php

namespace BrainGames\src\Games\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\src\Engine\goPlay;

const ROUNDS = 3;

const CONDITION = 'Answer "yes" if the number is even, otherwise answer "no".';

function randomNumbers()
{
    $minNumber = 2;
    $maxNumber1 = 50;
    return (rand($minNumber, $maxNumber1));
}

function startGameCheckNumberIsEven()
{
    $questionsAndAnswers = [];
    for ($i = 1; $i <= ROUNDS; $i++) {
        $question = randomNumbers();
        if (($question % 2) === 0) {
            $questionsAndAnswers[$question] = 'yes';
        } else {
            $questionsAndAnswers[$question] = 'no';
        }
    }

    goPlay($questionsAndAnswers, $condition = CONDITION);
}
