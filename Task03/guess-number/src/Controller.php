<?php

namespace Idane\GuessNumber\Controller;

use function Idane\GuessNumber\View\displayGame;
use function Idane\GuessNumber\View\displayWelcomeMessage;
use function Idane\GuessNumber\Model\generateNumber;
use function cli\line;
use function cli\input;

define("MAX_VALUE", 500);
define("MAX_ATTEMPTS", 15);

function gameLoop()
{
    $attempt = 0;
    $generated_number = generateNumber();
    while ($attempt < MAX_ATTEMPTS) {
        $user_input = input();
        if ($user_input == $generated_number) {
            line("Поздравляем! Вы угадали число");
            return;
        } elseif ($user_input === "!") {
            line("Вы вышли из игры");
            return;
        } elseif ($user_input > $generated_number) {
            line("Загаданное число меньше");
        } else {
            line("Загаданное число больше");
        }
        $attempt++;
    }
    line("Попытки исчерпаны");
}
function initiateGame()
{
    displayWelcomeMessage();
    displayGame();
    gameLoop();
}