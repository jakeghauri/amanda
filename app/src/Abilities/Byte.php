<?php
/**
 * Created by PhpStorm.
 * User: yurchik
 * Date: 14.08.2017
 * Time: 00:52
 */

namespace Zoo\Abilities;


class Byte implements AbilityTargetInterface
{
    private $action = "has bitten";

    public function execute(string $target = 'target'): string {
        return $this->action . ' ' . $target;
    }
}