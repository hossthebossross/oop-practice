<?php

require_once(__DIR__.'/UnitInterface.php');

abstract class Unit implements UnitInterface
{
    /**
     * Total hitpoints for unit
     * @var int
     */
    public $hitPoints;

    /**
     * Current health of the unit
     * @var int
     */
    public $health;

    /**
     * Relative speed from 1 to 100
     * @var int
     */
    public $speed;

    /**
     * The units name
     * @var string
     */
    public $name;

    public function getHitPoints()
    {
        return $this->hitPoints;
    }

    public function setHealth(int $health)
    {
        $this->health = $health;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getName()
    {
        return $this->name;
    }
}