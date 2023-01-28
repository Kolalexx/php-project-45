<?php

namespace BrainGames\src\Games\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\src\Engine\goPlay;

use const BrainGames\src\Engine\ROUNDS;

const CONDITION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function randomNumbers()
{
    $minNumber = 2;
    $maxNumber1 = 50;
    return (rand($minNumber, $maxNumber1));
}

function startGameCheckNumberIsPrime()
{
    $questionsAndAnswers = [];
    for ($index = 0; $index < ROUNDS; $index++) {
        $question = randomNumbers();
        if (gmp_prob_prime($question) === 2) {
            $questionsAndAnswers[$question] = 'yes';
        } else {
            $questionsAndAnswers[$question] = 'no';
        }
    }

    goPlay($questionsAndAnswers, CONDITION);
}
