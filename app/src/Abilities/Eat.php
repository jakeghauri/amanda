<?php
/**
 * Created by PhpStorm.
 * User: yurchik
 * Date: 14.08.2017
 * Time: 00:52
 */

namespace Zoo\Abilities;


class Eat implements AbilityTargetInterface
{
    private $action = "has eaten";

    public function execute(string $target = 'target'): string {
        return $this->action . ' ' . $target;
    }
}