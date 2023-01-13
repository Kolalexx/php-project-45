<?php

namespace BrainGames\src\Games\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\src\Engine\goPlay;
use function BrainGames\src\Engine\randomNumbers1;
use function BrainGames\src\Engine\randomNumbers2;
use function BrainGames\src\Engine\randomOperation;

const LEVELS = 3;

function calculateMathExercise()
{
    $arrayQuestion = [];
    $arrayRightAnswer = [];
    for ($i = 0; $i < LEVELS; $i++) {
        $randomNumber1 = randomNumbers1();
        $randomNumber2 = randomNumbers2();
        $operation = randomOperation();
        $result = 0;
        if ($operation === 0) {
            $question = "$randomNumber1 + $randomNumber2";
            $result = $result + $randomNumber1 + $randomNumber2;
        } elseif ($operation === 1) {
            $question = "$randomNumber1 - $randomNumber2";
            $result = $result + $randomNumber1 - $randomNumber2;
        } else {
            $question = ("$randomNumber1 * $randomNumber2");
            $result = ($result + $randomNumber1) * $randomNumber2;
        }
        $arrayQuestion[$i] = $question;
        $arrayRightAnswer[$i] = $result;
    }

    $condition = 'What is the result of the expression?';

    goPlay($arrayQuestion, $arrayRightAnswer, $condition);
}
