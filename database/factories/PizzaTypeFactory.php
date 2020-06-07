<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PizzaType;
use Faker\Generator as Faker;

$factory->define(PizzaType::class, function (Faker $faker) {
    return [
        'pizza_id' => $faker->numberBetween(1, 9),
        'name' => $faker->randomElement(['Small', 'Middle', 'Large']),
        'cost' => $faker->randomFloat(3, 15, 50)
    ];
});
