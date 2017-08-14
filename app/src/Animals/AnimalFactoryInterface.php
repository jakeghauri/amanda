<?php
namespace Zoo\Animals;


interface AnimalFactoryInterface {
    public function createAnimal() : Animal;
}