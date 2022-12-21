<?php

namespace BrainGames\src\Games\Calc;

use function cli\line;
use function cli\prompt;

use function BrainGames\src\Engine\greeting;
use function BrainGames\src\Engine\randomNumbers1;
use function BrainGames\src\Engine\randomNumbers2;
use function BrainGames\src\Engine\wrong;
use function BrainGames\src\Engine\congratulations;
use function BrainGames\src\Engine\randomOperation;

function gameSecond()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    greeting($name);
    line('What is the result of the expression?');
    $index = 0;
    while ($index < 3) {
        $numbers1 = randomNumbers1();
        $numbers2 = randomNumbers2();
        $operation = randomOperation();
        $result = 0;
        if ($operation === 0) {
            $question = "$numbers1 + $numbers2";
            $result = $result + $numbers1 + $numbers2;
        } elseif ($operation === 1) {
            $question = "$numbers1 - $numbers2";
            $result = $result + $numbers1 - $numbers2;
        } else {
            $question = ("$numbers1 * $numbers2");
            $result = ($result + $numbers1) * $numbers2;
        }
        line("Question: %s!", $question);
        $answer = prompt('Your answer');
        if ($answer == $result) {
            line('Correct!');
            $index += 1;
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
            return wrong($name);
        }
    }
    congratulations($name);
}