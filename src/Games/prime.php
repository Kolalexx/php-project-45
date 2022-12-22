<?php

namespace BrainGames\src\Games\prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\src\Engine\greeting;
use function BrainGames\src\Engine\randomNumbers1;
use function BrainGames\src\Engine\wrong;
use function BrainGames\src\Engine\congratulations;

function gameFifth()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    greeting($name);
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $index = 0;
    $arr = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47];
    while ($index < 3) {
        $question = randomNumbers1();
        line("Question: %s!", $question);
        $answer = prompt('Your answer');
        if ((in_array($question, $arr) && ($answer === "yes")) || (!in_array($question, $arr) && ($answer === "no"))) {
            line('Correct!');
            $index += 1;
        } else {
            if (in_array($question, $arr)) {
                line("'$answer' is wrong answer ;(. Correct answer was 'yes'.");
            } else {
                line("'$answer' is wrong answer ;(. Correct answer was 'no'.");
            }
            return wrong($name);
        }
    }
    congratulations($name);
}
