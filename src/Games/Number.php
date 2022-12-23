<?php

namespace BrainGames\src\Games\Number;

use function cli\line;
use function cli\prompt;
use function BrainGames\src\Engine\greeting;
use function BrainGames\src\Engine\randomNumbers1;
use function BrainGames\src\Engine\wrong;
use function BrainGames\src\Engine\congratulations;

function gameFirst()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    greeting($name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $index = 0;
    while ($index < 3) {
        $numbers = randomNumbers1();
        line("Question: %s!", $numbers);
        $answer = prompt('Your answer');
        if (((($numbers % 2) === 0) && ($answer === "yes")) || ((($numbers % 2) !== 0) && ($answer === "no"))) {
            line('Correct!');
            $index += 1;
        } else {
            if (($numbers % 2) === 0) {
                line("'$answer' is wrong answer ;(. Correct answer was 'yes'.");
            } else {
                line("'$answer' is wrong answer ;(. Correct answer was 'no'.");
            }
            return wrong($name);
        }
    }
    congratulations($name);
}
