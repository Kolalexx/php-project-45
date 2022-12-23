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
