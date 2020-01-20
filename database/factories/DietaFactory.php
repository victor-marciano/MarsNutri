<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Dieta::class, function (Faker $faker) {
    return [
        'nome' => "Dieta do $faker->name",
        'objetivo' => $faker->numberBetween(1, 3),
        'user_id' => $faker->numberBetween(1, 50)
    ];
});
