<?php

namespace Mammoth\Model\Team;

use Mammoth\Model\UnitInterface;

interface TeamInterface
{
    public function setUnits(array $units);
    public function getUnits();
    public function addUnit(UnitInterface $unit);
    public function removeUnit(UnitInterface $unit);
    public function setHealth($health);
    public function getHealth();
    public function getDamage();
    public function setTeamName($teamName); 
    public function getTeamName();
}