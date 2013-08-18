<?php

namespace Mammoth\Manager;

use Mammoth\Unit\UnitInterface;

class TeamOrganizer
{
    public function teamAverageDmg(UnitInterface $unit1, UnitInterface $unit2, UnitInterface $unit3, UnitInterface $unit4)
    {
       
        $zealot1 = new Zealot();
        $marine2 = new Marine();
        

        $unit1AttackDmg = $unit1->getAttackDmg();
        $unit2AttackDmg = $unit2->getAttackDmg();
        $unit3AttackDmg = $unit3->getAttackDmg();
        $unit3AttackDmg = $unit4->getAttackDmg();

        $unit1AttackRate = $unit1->getAttackRate();
        $unit2AttackRate = $unit2->getAttackRate();
        $unit3AttackRate = $unit3->getAttackRate();
        $unit4AttackRate = $unit4->getAttackRate();

        $unit1->setAverageDmg() = ($unit1AttackDmg % $unit1AttackRate)
        $unit2->setAverageDmg() = ($unit2AttackDmg % $unit2AttackRate)
        $unit3->setAverageDmg() = ($unit3AttackDmg % $unit3AttackRate)
        $unit4->setAverageDmg() = ($unit4AttackDmg % $unit4AttackRate)

        $unit1AverageDmg = $unit1->setAverageDmg()
        $unit2AverageDmg = $unit2->setAverageDmg()
        $unit3AverageDmg = $unit3->setAverageDmg()
        $unit4AverageDmg = $unit4->setAverageDmg() 

        $team1->setTeamAverageDmg() = $unit1AverageDmg + $unit2AverageDmg
        $team2->setTeamAverageDmg() = $unit3AverageDmg + $unit4AverageDmg
}

    public function teamHealth(UnitInterface $unit1, UnitInterface $unit2, UnitInterface $unit3, UnitInterface $unit4)
    {

    function setAverageDmg($averageDmg);
    function setTeamAverageDmg($teamAverageDmg);
    function setTeamHealth($teamHealth);

        ($team2AttackDamage % $team2AttackRate));
        ($team1attackdamage % $team1attackrate));
        }