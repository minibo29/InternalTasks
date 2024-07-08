<?php

namespace App\ThirdTask;

class FightService
{
    public function fight(HeroInterface $attacker, HeroInterface $defender): void
    {
        $damage = DamageCalculator::calculateDamage($attacker, $defender);
        $healthPoints = ($defender->getHealthPoints() - $damage) > 0 ? $defender->getHealthPoints() - $damage : 0;

        $defender->setHealthPoints($healthPoints);
    }
}