<?php
/**
 * Created by PhpStorm.
 * User: yurchik
 * Date: 14.08.2017
 * Time: 01:51
 */

namespace Zoo\Animals;


use Zoo\Abilities\Ability;
use Zoo\Abilities\Byte;
use Zoo\Abilities\Eat;

class DogFactory implements AnimalFactoryInterface
{

    public function createAnimal(): Animal
    {
        return new Animal(
            'dog',
            [
                'walk' => new Ability('walk'),
                'run' => new Ability('run'),
                'wuf' => new Ability('wuf'),
                'byte' => new Byte(),
                'eat' => new Eat()
            ]
        );
    }
}