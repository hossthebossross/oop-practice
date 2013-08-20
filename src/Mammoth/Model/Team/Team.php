<?php

namespace Mammoth\Model\Team;

use Mammoth\Model\UnitInterface;

class Team implements TeamInterface
{
    /**
     * @var array of Unit objects
     */
    protected $units = array();
    protected $name;
    protected $health;

    public function __construct($units, $name)
    {
        $this->setUnits($units);
        $this->setName($name);
    }

    public function setUnits(array $units)
    {
        $this->units = $units;
    }

    public function getUnits()
    {
        return $this->units;
    }

    public function addUnit(UnitInterface $unit)
    {
        //array_push($this->units, $unit);
        $this->units[] = $unit;
    }

    public function removeUnit(UnitInterface $unit)
    {
        foreach ($this->units as $k => $v) {
            if ($v === $unit) {
                unset($this->units[$k]);
            }
        }
    }

    public function setHealth($health)
    {
        $this->health = $health;
    }

    public function getHealth()
    {
        if ($this->health !== null) {
            return $this->health; 
        }

        $health = 0;
        foreach ($this->getUnits() as $unit) {
            $health += $unit->getHealth();
        }

        return $health;
    }

    public function getDamage()
    {
        $damage = 0;
        foreach ($this->getUnits() as $unit) {
            $damage += $unit->getAttackDmg();
        }

        return $damage;
    }

    public function setName($name) 
    {
        $this->name = $name;
    }
 
    public function getName()
    {
        return $this->name;
    }
}