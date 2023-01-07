<?php

namespace BrainGames\src\Engine;

use function cli\line;
use function cli\prompt;

function greeting(string $name)
{
    line("Hello, %s!", $name);
}

function randomNumbers1()
{
    $minNumber = 2;
    $maxNumber1 = 50;
    return (rand($minNumber, $maxNumber1));
}

function randomNumbers2()
{
    $minNumber = 1;
    $maxNumber2 = 9;
    return (rand($minNumber, $maxNumber2));
}

function wrong(string $name)
{
    line("Let's try again, %s!", $name);
}

function congratulations(string $name)
{
    line("Congratulations, %s!", $name);
}

function randomOperation()
{
    $minNumber = 0;
    $quantityOperation = 2;
    return (rand($minNumber, $quantityOperation));
}

function goPlay($arrayQuestion, $arrayRightAnswer, $condition)
{
    line('Welcome to the Brain Games!');
    $namePlayer = prompt('May I have your name?');
    line("Hello, %s!", $namePlayer);
    line($condition);
    for ($i = 0; $i < 3; $i++) {
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
