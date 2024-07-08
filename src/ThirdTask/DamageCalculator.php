<?php

namespace App\ThirdTask;

class DamageCalculator
{
    const float DAMAGE_RAND_FACTOR = 0.2;

    public static function calculateDamage(HeroInterface $attacker, HeroInterface $defender): int
    {
        $damage = 0;

        if ($attacker->getAttack() > $defender->getDefence()) {
            $baseDamage = $attacker->getAttack() - $defender->getDefence();

            $factor = $baseDamage * self::DAMAGE_RAND_FACTOR;

            $minDamage = (int) ($baseDamage - $factor);
            $maxDamage = (int) ($baseDamage + $factor);

            $damage = mt_rand($minDamage, $maxDamage);
        }

        return $damage;
    }
}