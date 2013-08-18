<?php

namespace Mammoth\Manager;

use Mammoth\Unit\UnitInterface;

class TeamOrganizer
{
    public function teamAverageDmg(UnitInterface $unit1, UnitInterface $unit2, UnitInterface $unit3, UnitInterface $unit4)
    {
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

        $averageDmg1 = $unit1->setAverageDmg()
        $averageDmg2 = $unit2->setAverageDmg()
        $averageDmg3 = $unit3->setAverageDmg()
        $averageDmg4 = $unit4->setAverageDmg()

        $team1->seteamAverageDmg() = $averageDmg1 + $averageDmg2
        $team2->seteamAverageDmg() = $averageDmg3 + $averageDmg4
2

    public function teamHealth(UnitInterface $unit1, UnitInterface $unit2, UnitInterface $unit3, UnitInterface $unit4)
    {

        $health1 = $unit1->gethealth();
        $health2 = $unit2->gethealth();
        $health3 = $unit3->gethealth();
        $health4 = $unit4->gethealth();

        $team1->setTeamHealth() = $health1 + $health2
        $team2->setTeamHealth() = $health3 + $health4
    }
    

