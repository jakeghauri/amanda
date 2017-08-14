<?php

namespace Zoo\Animals;


use Zoo\Abilities\AbilityInterface;

interface AnimalInterface {
    public function getName() : string;

    public function hasAbility($name) : bool;

    public function getAbility($name) : AbilityInterface;
}