<?php

namespace Idane\GuessNumber\Controller;

use Exception;
use Idane\GuessNumber\Model;

use function Idane\GuessNumber\View\displayGame;
use function Idane\GuessNumber\View\displayWelcomeMessage;
use function Idane\GuessNumber\View\getPlayerName;
use function Idane\GuessNumber\View\displayMenu;
use function Idane\GuessNumber\View\displayGames;
use function Idane\GuessNumber\View\displayWins;
use function Idane\GuessNumber\View\displayLosses;
use function Idane\GuessNumber\View\displayPlayerStats;
use function cli\line;
use function cli\input;

function initiateGame()
{
    displayWelcomeMessage();
    $player_name = getPlayerName();
    $model = new Model($player_name);
    while (true) {
        $menuOption = displayMenu();
        switch ($menuOption) {
            case '1':
                $model->generateNumber();
                $model->setNumber();
                $model->gameLoop();
                $model->newGate($player_name);
                break;
            case '2':
                displayGames($player_name);
                break;
            case '3':
                displayWins($player_name);
                break;
            case '4':
                displayLosses($player_name);
                break;
            case '5':
                displayPlayerStats($player_name);
                break;
            case '6':
                displayGame();
                break;
            case '7':
                line("Введите новое максимальное число:");
                try {
                    $max_number = input();
                } catch (Exception $e) {
                    return 1;
                }
                $model->setMaxNumber($max_number);
                break;
            case '8':
                line("Введите новое количество попыток:");
                try {
                    $max_attempts = input();
                } catch (Exception $e) {
                    return 1;
                }
                $model->setMaxAttempts($max_attempts);
                break;
            case '9':
                $model->delete();
                return 0;
            default:
                line("Неверный выбор. Пожалуйста, попробуйте снова.");
                break;
        }
    }
}