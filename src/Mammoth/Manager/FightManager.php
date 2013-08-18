<?php

namespace Mammoth\Manager;

use Mammoth\Unit\UnitInterface;
       
class FightManager
{
    public function fight(UnitInterface $team1, Unitinterface $team2)
    {
        $team1AverageDmg = $team1->getTeamAverageDmg();
        $team2AverageDmg = $team2->getTeamAverageDmg();

        while (($team1->getTeamHealth() > 0) && ($team2->getTeamHealth() > 0)) {
            $team1->setTeamHealth($team1->getTeamHealth() - $team2AverageDmg)
            $team2->setTeamHealth($team2->getTeamHealth() - $team1AverageDmg)

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