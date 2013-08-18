<?php

namespace Mammoth\Unit;

interface UnitInterface
{
    function getHitPoints();
    function setHealth($health);
    function getHealth();
    function getSpeed();
    function getName();
    function getAttackRate();
    function getAttackDmg();
    function getAverageDmg();
    function setAverageDmg($averageDmg);
    function getTeamAverageDmg();
    function setTeamAverageDmg($teamAverageDmg);
    function getTeamHealth();
    function setTeamHealth($teamHealth);
}