<?php

function __autoload($class) {
    // convert namespace to full file path
    $class = __DIR__.'/src/' . str_replace('\\', '/', $class) . '.php';
    require_once($class);
}

use Mammoth\Unit\Zealot;
use Mammoth\Unit\Marine;
use Mammoth\Manager\FightManager;

$zealot1 = new Zealot();
$marine2 = new Marine();

$fightManager = new FightManager();

$fightResult = $fightManager->fight($zealot1, $marine2);

var_dump($fightResult);