<?php
/**
 * Created by PhpStorm.
 * User: yurchik
 * Date: 14.08.2017
 * Time: 00:28
 */
declare(strict_types=1);


namespace Tests;

use PHPUnit\Framework\TestCase;
use Zoo\Abilities\Ability;
use Zoo\Abilities\Byte;

final class TestAbility extends TestCase
{

    public function testWalkAbility() : void{
        $ability = new Ability('meow');
        $byteAbility = new Byte();
        $eatAbility = new Eat();

        $this->assertEquals('meow', $ability->execute());
        $this->assertEquals('has bitten man', $byteAbility->execute("man"));
        $this->assertEquals('has eaten man', $eatAbility->execute("food"));
    }
}