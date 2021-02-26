<?php

const filename = 'meals.txt';

$meals = [
    ['name' => 'Süßkartoffeltaschen mit Frischkäse und Kräutern gefüllt',
        'description' => 'Die Süßkartoffeln werden vorsichtig aufgeschnitten und der Frischkäse eingefüllt.',
        'price_intern' => 2.90,
        'price_extern' => 3.90,
        'allergens' => [11, 13],
        'img' => './images/meals/kartoffel.png',
        'amount' => 42],
    ['name' => 'Süßkartoffeltaschen ohne Frischkäse und Kräutern gefüllt',
        'description' => 'Die Süßkartoffeln werden vorsichtig aufgeschnitten und der Frischkäse eingefüllt.',
        'price_intern' => 2.50,
        'price_extern' => 3.50,
        'allergens' => [11, 13],
        'img' => './images/meals/kartoffel.png',
        'amount' => 12],
    ['name' => 'Rindfleisch mit Bambus, Keiserschoten und rotem Paprika, dazu Mia Nudeln',
        'description' => 'testDesc',
        'price_intern' => 3.50,
        'price_extern' => 6.20,
        'allergens' => [11, 12],
        'img' => './images/meals/rindfleisch.png',
        'amount' => 12]
    ,
    ['name' => 'TestNewMeal',
        'description' => 'testDesc',
        'price_intern' => 1.00,
        'price_extern' => 2.00,
        'allergens' => [11, 12],
        'img' => './images/meals/burger.png',
        'amount' => 123]
];

file_put_contents(filename, serialize($meals));
echo serialize($meals);
echo file_get_contents(filename);