<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pizza;
use Faker\Generator as Faker;

$factory->define(Pizza::class, function (Faker $faker) {
    return [
        'name'=> $faker->firstName,
        'composition' => $faker->text(150),
        'image' => "/uploads/pizza_1.png",
        'description' => $faker->text(50)
    ];
});
