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
}