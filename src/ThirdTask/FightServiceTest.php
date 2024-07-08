<?php

namespace App\ThirdTask;

use PHPUnit\Framework\TestCase;

class FightServiceTest extends TestCase {

    private HeroInterface $attacker;
    private HeroInterface $defender;

    private $attackerAttack = 40;
    private $defenderDefens = 35;
    private $defenderHealPoints = 80;


    protected function setUp(): void
    {
        $attackerObject = new class{
            public int $attack = 0;
            public int $defence = 0;
            public int $healthPoints = 0;
        };
        $defenderObject = clone $attackerObject;
        $attackerObject->attack = $this->attackerAttack;
        $defenderObject->defence = $this->defenderDefens;
        $defenderObject->healthPoints = $this->defenderHealPoints;

        $this->attacker = $this->createMock(HeroInterface::class);
        $this->defender = $this->createMock(HeroInterface::class);

        $this->attacker->method('getAttack')
            ->willReturnCallback(fn() => $attackerObject->attack)
        ;
        $this->defender->method('getDefence')
            ->willReturnCallback(fn() => $defenderObject->defence)
        ;
        $this->defender->method('getHealthPoints')
            ->willReturnCallback(fn() => $defenderObject->healthPoints)
        ;
        $this->defender->method('setHealthPoints')
            ->willReturnCallback(function ($healthPoints) use ($defenderObject) {
                $defenderObject->healthPoints = $healthPoints;
                return $this->defender;
            })
        ;
    }

    public function testFight()
    {
        // Set Up
        $fightService = new FightService();

        // Do something
        $fightService->fight($this->attacker, $this->defender);

        // Make assertions
        $this->assertEqualsWithDelta(75, $this->defender->getHealthPoints(), 1);
    }
}