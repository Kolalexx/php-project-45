<?php

namespace BrainGames\src\Games\prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\src\Engine\goPlay;
use function BrainGames\src\Engine\randomNumbers1;

function checkIfNumberIsPrime()
{
    $arrayQuestion = [];
    $arrayRightAnswer = [];
    $primeNumbers = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47];
    for ($i = 0; $i < 3; $i++) {
        $question = randomNumbers1();
        if (in_array($question, $primeNumbers, true)) {
            $arrayRightAnswer[$i] = 'yes';
        } else {
            $arrayRightAnswer[$i] = 'no';
        }
        $arrayQuestion[$i] = $question;
    }

    $condition = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    goPlay($arrayQuestion, $arrayRightAnswer, $condition);
}
