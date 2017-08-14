<?php
/**
 * Created by PhpStorm.
 * User: yurchik
 * Date: 14.08.2017
 * Time: 01:51
 */

namespace Zoo\Animals;


use Zoo\Abilities\Ability;
use Zoo\Abilities\Eat;

class CatFactory implements AnimalFactoryInterface
{

    public function createAnimal(): Animal
    {
        return new Animal(
            'cat',
            [
                'walk' => new Ability('walk'),
                'meow' => new Ability('meow'),
                'eat' => new Eat()
            ]
        );
    }
}