<?php

namespace BrainGames\src\Games\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\src\Engine\greeting;
use function BrainGames\src\Engine\randomNumbers1;
use function BrainGames\src\Engine\randomNumbers2;
use function BrainGames\src\Engine\wrong;
use function BrainGames\src\Engine\congratulations;

function gameThird()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    greeting($name);
    line('Find the greatest common divisor of given numbers.');
    $index = 0;
    while ($index < 3) {
        $numbers1 = randomNumbers1();
        $numbers2 = randomNumbers2();
        $result = 0;
        $question = "$numbers1 $numbers2";
        if ($numbers1 === $numbers2) {
            $result = $numbers1;
        } elseif ($numbers1 > $numbers2) {
            $i = 1;
            while ($i <= $numbers2) {
                if ($numbers1 % $i === 0 && $numbers2 % $i === 0) {
                    $result = $i;
                    $i += 1;
                } else {
                    $i += 1;
                }
            }
        } else {
            $i = 1;
            while ($i <= $numbers1) {
                if ($numbers2 % $i === 0 && $numbers1 % $i === 0) {
                    $result = $i;
                    $i += 1;
                } else {
                    $i += 1;
                }
            }
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
