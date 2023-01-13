<?php

namespace BrainGames\src\Engine;

use function cli\line;
use function cli\prompt;

const LEVELS = 3;

function goPlay(array $arrayQuestion, array $arrayRightAnswer, string $condition)
{
    line('Welcome to the Brain Games!');
    $namePlayer = prompt('May I have your name?');
    line("Hello, %s!", $namePlayer);
    line($condition);
    for ($i = 0; $i < LEVELS; $i++) {
        line("Question: %s!", $arrayQuestion[$i]);
        $answer = prompt('Your answer');
        if ($answer == $arrayRightAnswer[$i]) {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$arrayRightAnswer[$i]'.");
            return line("Let's try again, %s!", $namePlayer);
        }
    }
    line("Congratulations, %s!", $namePlayer);
}
