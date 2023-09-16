#!/usr/bin/env php
<?php
require_once(__DIR__ . '/../src/Controller.php');
require_once(__DIR__ . '/../src/View.php');
require_once(__DIR__ . '/../vendor/autoload.php');

use 1D4n3\guess_number\Controller\Controller; #???
use 1D4n3\guess_number\View\View; #???

Controller\startGame();

$controller = new Controller();
$view = new View ();

$controller->startGame($view);
?>