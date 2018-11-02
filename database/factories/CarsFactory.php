<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(array('Honda', 'Toyota', 'Ford')),
        'model' => $faker->lexify(),
        'year' => $faker->year('now'),

    ];
});
