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
use Zoo\Animals\CatFactory;
use Zoo\Animals\DogFactory;
use Zoo\Animals\SparrowFactory;
use Zoo\Application;

final class TestApplication extends TestCase
{

    public function testHandleApplication() : void {
        $application = new Application();

        $scenarion = [
            CatFactory::class => [
                'walk','meow',
                ['eat' => 'food']
            ],
            DogFactory::class => [
                'walk','run','wuf',
                ['byte' => 'man'],
                ['eat' => 'food']
            ],
            SparrowFactory::class => [
                'walk'
            ]
        ];

    }
}
