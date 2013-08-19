<?php

namespace Mammoth\Unit;

interface UnitInterface
{
    function getHitPoints();
    function setHealth(int $health);
    function getHealth();
    function getSpeed();
    function getName();
    function getAttackRate();
    function getAttackDmg();
    function getAverageDmg();
    function setAverageDmg(int $averageDmg);
    function getTeamAverageDmg();
    function setTeamAverageDmg(int $teamAverageDmg);
    function getTeamHealth();
    function setTeamHealth(int $teamHealth);
}