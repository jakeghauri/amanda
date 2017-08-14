<?php
/**
 * Created by PhpStorm.
 * User: yurchik
 * Date: 14.08.2017
 * Time: 01:07
 */

declare(strict_types=1);

namespace Tests;


use PHPUnit\Framework\TestCase;
use Zoo\Abilities\AbilityInterface;
use Zoo\Abilities\Byte;
use Zoo\Animals\Animal;
use Zoo\Animals\AnimalInterface;

final class TestAnimal extends TestCase
{

    public function testAnimalCreation() : void{
        $animal = new Animal('dog', []);
        $wolf = new Animal('wolf', [
            Byte::class => new Byte()
        ]);

        $this->assertInstanceOf(AnimalInterface::class, $animal);
        $this->assertInstanceOf(AnimalInterface::class, $wolf);
        $this->assertEquals('dog', $animal->getName());
        $this->assertEquals('wolf', $wolf->getName());

        $ability = $wolf->getAbility(Byte::class);
        $this->assertInstanceOf(AbilityInterface::class, $ability);
        $this->assertEquals('has bitten man', $ability->execute('man'));
    }
}
