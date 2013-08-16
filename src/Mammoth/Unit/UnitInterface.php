<?php

interface UnitInterface
{
    function getHitPoints();
    function setHealth(int $health);
    function getHealth();
    function getSpeed();
    function getName();
}