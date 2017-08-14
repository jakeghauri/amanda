<?php
/**
 * Created by PhpStorm.
 * User: yurchik
 * Date: 14.08.2017
 * Time: 02:02
 */

namespace Zoo;


use Zoo\Abilities\AbilityInterface;
use Zoo\Animals\AnimalFactoryInterface;
use Zoo\Animals\AnimalInterface;

class Application
{

    public function handle(array $scenario) : void {
        foreach ($scenario as $key => $value){
            if(class_exists($key)){
                /** @var AnimalFactoryInterface $animalFactory */
                $animalFactory = new $key();
                /** @var AnimalInterface $animal */
                $animal = $animalFactory->createAnimal();
                foreach ($value as $abilityName){
                    $target = '';
                    if(is_array($abilityName)){
                        $target = $abilityName[key($abilityName)];
                        $abilityName = key($abilityName);
                    }
                    if($animal->hasAbility($abilityName)){
                        /** @var AbilityInterface $ability */
                        $ability = $animal->getAbility($abilityName);
                        echo $animal->getName() . ' ' . $ability->execute($target) . PHP_EOL;
                    }
                }
            }
        }
    }


}