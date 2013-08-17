<?php

namespace Mammoth\Manager;

use Mammoth\Unit\UnitInterface;

       
class FightManager
{
    public function fight(UnitInterface $unit1, UnitInterface $unit2)
    {
        for $unit1 {
            while ($health > 0) {
            $health = ($health - ($attackDmg % $attackRate));
            } 
        }   
        for $unit2 {
            while ($health > 0) {
            $health = ($health - ($attackDmg % $attackRate));
            } 
        }  
        // make these bitches fight to the death
        return 'no one won';// result of the fight
    }
}