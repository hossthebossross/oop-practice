<?php

namespace Mammoth\Unit;

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

    /**
    * Relative speed from 1 to 100
    * @var int
    */
    public $attackRate;

    /**
    * Total damage for unit
    * @var int
    */    
    public $attackDmg;


    public function getHitPoints()
    {
        return $this->hitPoints;
    }

    public function setHealth($health)
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
    public function getAttackRate()
    {
        return $this->attackRate;
    }
    public function getAttackDmg()
    {
        return $this->attackDmg;
    }
}