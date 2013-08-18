<?php

namespace Mammoth\Manager;

use Mammoth\team\UnitInterface;
       
class FightManager
{
    public function fight(UnitInterface $team1, Unitinterface $team2)
    {
        $team1attackdamage = $team1->getAttackDmg();
        $team2AttackDamage = $team2->getAttackDmg();
        $team1attackrate = $team1->getAttackRate();
        $team2AttackRate = $team2->getAttackRate();


        while (($team1->getHealth() > 0) && ($team2->getHealth() > 0)) {
            $team1->setHealth($team1->getHealth() - ($team2AttackDamage % $team2AttackRate));
            $team2->setHealth($team2->getHealth() - ($team1attackdamage % $team1attackrate));
        }

        $teams = array($team1, $team2);

        foreach ($teams as $team) {
            if ($team->getHealth() > 0) {
                $winner = $team;
            }
        }

        if ($winner) {
            return sprintf('The winner is %s', $winner->getName());
        }

        return 'Everyones dead';
    }
}