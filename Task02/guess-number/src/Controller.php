<?php

namespace Idane\GuessNumber\Controller;
use function Idane\GuessNumber\View\showGame;
use function cli\line;

function startGame()
{
    line("Угадай число!");
}