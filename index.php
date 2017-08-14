<?php
/**
 *  Test bootstrap
 */
error_reporting(E_ALL);

require __DIR__.'./vendor/autoload.php';

$scenarion = [
    \Zoo\Animals\CatFactory::class => [
        'walk','meow',
        ['eat' => 'food']
    ],
    \Zoo\Animals\DogFactory::class => [
        'walk','run','wuf','muf',
        ['byte' => 'man'],
        ['eat' => 'food']
    ],
    \Zoo\Animals\SparrowFactory::class => [
        'walk', 'tweet', 'fly',
        ['eat' => 'food']
    ],
    \Zoo\Animals\RatFactory::class => [
        'pi',
        ['eat' => 'food']
    ]
];

$app = new \Zoo\Application();
$app->handle($scenarion);