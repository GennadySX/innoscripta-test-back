<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pizza;
use Faker\Generator as Faker;

$factory->define(Pizza::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'composition' => $faker->text(150),
        'image' => '/uploads/pizza.png',
        'description' => $faker->text(50)
    ];
});
