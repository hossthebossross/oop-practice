<?php

namespace Mammoth\Manager;

use Mammoth\Unit\UnitInterface;
       
class FightManager
{
    public function fight(UnitInterface $team1, Unitinterface $team2)
    {
        $teamAverageDmg1 = $team1->getTeamAverageDmg();
        $teamAverageDmg2 = $team2->getTeamAverageDmg();

        while (($team1->getTeamHealth() > 0) && ($team2->getTeamHealth() > 0)) {
            $team1->setTeamHealth($team1->getTeamHealth() - $teamAverageDmg1)
            $team2->setTeamHealth($team2->getTeamHealth() - $teamAverageDmg2)

        $teams = array($team1, $team2);

        foreach ($teams as $team) {
            if ($team->getTeamHealth() > 0) {
                $winner = $team;
            }
        }

        if ($winner) {
            return sprintf('The winner is %s', $winner->getName());
        }

        return 'Everyones dead';
    }
}