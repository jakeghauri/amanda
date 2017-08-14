<?php

namespace Zoo\Abilities;


interface AbilityTargetInterface extends AbilityInterface {
    public function execute(string $target = 'target') : string;
}