<?php

namespace BrainGames\src\Number;

use function cli\line;
use function cli\prompt;

function firstGame()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $index = 0;
    while ($index < 3) {
        $minNumber = 0;
        $maxNumber = 100;
        $numbers = rand($minNumber, $maxNumber);
        line("Question: %s!", $numbers);
        $answer = prompt('Your answer');
        if (((($numbers % 2) === 0) && ($answer === "yes")) || ((($numbers % 2) !== 0) && ($answer === "no"))) {
            line('Correct!');
            $index += 1;
        } else {
            line("'yes' is wrong answer ;(. Correct answer was 'no'.");
            return line("Let's try again, %s!", $name);
        }
    }
    line("Congratulations, %s!", $name);
}
