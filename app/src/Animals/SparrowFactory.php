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

class SparrowFactory implements AnimalFactoryInterface
{

    public function createAnimal(): Animal
    {
        return new Animal(
            'sparrow',
            [
                'walk' => new Ability('walk'),
                'tweet' => new Ability('tweet'),
                'fly' => new Ability('fly'),
                'eat' => new Eat()
            ]
        );
    }
}