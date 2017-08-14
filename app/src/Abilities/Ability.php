<?php
/**
 * Created by PhpStorm.
 * User: yurchik
 * Date: 14.08.2017
 * Time: 00:52
 */

namespace Zoo\Abilities;


class Ability implements AbilityInterface
{
    private $action;

    public function __construct($action)
    {
        $this->action = $action;
    }

    public function execute(): string {
        return $this->action;
    }
}