<?php
namespace 1D4n3\guess_number\Contoller;

use 1D4n3\guess_number\View\View;

class Controller
{
    public function startGame (View $view)
    {
        $view->showWelcomeScreen();
    }
}
?>