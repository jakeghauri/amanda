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

class RatFactory implements AnimalFactoryInterface
{

    public function createAnimal(): Animal
    {
        return new Animal(
            'rat',
            [
                'pi' => new Ability('pi'),
                'eat' => new Eat()
            ]
        );
    }
}