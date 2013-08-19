<?php

namespace Mammoth\Manager\Fight;

use Mammoth\Model\Unit\UnitInterface;
use Mammoth\Model\Team\TeamInterface;
       
class FightManager
{
    static public function fight(TeamInterface $team1, TeamInterface $team2)
    {
        $team1Damage = $team1->getDamage();
        $team2Damage = $team2->getDamage();

        while (($team1->getHealth() > 0) && ($team2->getHealth() > 0)) {
            $team1->setHealth($team1->getHealth() - $team2Damage);
            $team2->setHealth($team2->getHealth() - $team1Damage);
        }

        $teams = array($team1, $team2);

        foreach ($teams as $team) {
            if ($team->getHealth() > 0) {
                $winner = $team;
            }
        }

        if ($winner) {
            return $winner;
            //return sprintf('The winner is %s', $winner->getName());
        }

        return 'Everyones dead';
    }
}