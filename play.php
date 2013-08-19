<?php

function __autoload($class) {
    // convert namespace to full file path
    $class = __DIR__.'/src/' . str_replace('\\', '/', $class) . '.php';
    require_once($class);
}

use Mammoth\Manager\Fight\FightManager;
use Mammoth\Model\Team\Team;
use Mammoth\Model\Unit\Zealot;
use Mammoth\Model\Unit\Marine;

$zealot1 = new Zealot();
$zealot2 = new Zealot();
$marine1 = new Marine();
$marine2 = new Marine();

$team1 = new Team(array($zealot1, $zealot2));
$team2 = new Team(array($marine1, $marine2));

$fightResult = FightManager::fight($team1, $team2);

var_dump($fightResult);