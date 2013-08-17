<?php

function __autoload($class) {
    // convert namespace to full file path
    $class = __DIR__.'/src/' . str_replace('\\', '/', $class) . '.php';
    require_once($class);
}

use Mammoth\Unit\Zealot;
use Mammoth\Manager\FightManager;

$zealot1 = new Zealot();
$zealot2 = new Zealot();

$fightManager = new FightManager();

$fightResult = $fightManager->fight($zealot1, $zealot2);

var_dump($fightResult);