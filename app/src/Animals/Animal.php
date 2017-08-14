<?php
/**
 * Created by PhpStorm.
 * User: yurchik
 * Date: 14.08.2017
 * Time: 01:13
 */

namespace Zoo\Animals;


use Zoo\Abilities\AbilityInterface;

class Animal implements AnimalInterface
{
    private $name;

    /**
     * @var AbilityInterface[]
     */
    private $abilities;

    public function __construct(string $name, array $abilities)
    {
        $this->name = $name;
        $this->abilities = $abilities;
    }

    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @param $name
     * @return AbilityInterface
     */
    public function getAbility($name): AbilityInterface
    {
        return $this->abilities[$name];
    }

    /**
     * @param $name
     * @return bool
     */
    public function hasAbility($name): bool
    {
        return key_exists($name, $this->abilities);
    }
}