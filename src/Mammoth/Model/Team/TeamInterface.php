<?php

namespace Mammoth\Model\Team;

use Mammoth\Model\Units\UnitInterface;

interface TeamInterface
{
    public function setUnits(array $units);
    public function getUnits();
    public function addUnit(UnitInterface $unit);
    public function removeUnit(UnitInterface $unit);
    public function setHealth($health);
    public function getHealth();
    public function getDamage();
    public function setName($name); 
    public function getName();
}