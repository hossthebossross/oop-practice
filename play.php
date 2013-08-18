<?php

function __autoload($class) {
    // convert namespace to full file path
    $class = __DIR__.'/src/' . str_replace('\\', '/', $class) . '.php';
    require_once($class);
}

use Mammoth\Unit\Zealot;
use Mammoth\Unit\Marine;
use Mammoth\Manager\FightManager;
use Mammoth\Manager\TeamOrganizer;

$zealot1 = new Zealot();
$marine2 = new Marine();
$zealot3 = new Zealot();
$marine4 = new Marine();

$team1 = new TeamOrganizer();
$team2 = new TeamOrganizer();

$fightManager = new FightManager();

$fightResult = $fightManager->fight($team1, $team2);

var_dump($fightResult);