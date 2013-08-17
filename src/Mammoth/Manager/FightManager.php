<?php

namespace Mammoth\Manager;

use Mammoth\Unit\UnitInterface;
       
class FightManager
{
    public function fight(UnitInterface $unit1, UnitInterface $unit2)
    {
        $unit1AttackDamage = $unit1->getAttackDmg();
        $unit2AttackDamage = $unit2->getAttackDmg();

        while (($unit1->getHealth() > 0) && ($unit2->getHealth() > 0)) {
            $unit1->setHealth($unit1->getHealth() - $unit2AttackDamage);
            $unit2->setHealth($unit2->getHealth() - $unit1AttackDamage);
        }

        $units = array($unit1, $unit2);

        foreach ($units as $unit) {
            if ($unit->getHealth() > 0) {
                $winner = $unit;
            }
        }

        if ($winner) {
            return sprintf('The winner is %s', $winner->getName());
        }

        return 'Everyones dead';
    }
}