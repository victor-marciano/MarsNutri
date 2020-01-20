<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Refeicao;
use Faker\Generator as Faker;

$factory->define(Refeicao::class, function (Faker $faker) {
    return [
        'nome' => "Refeicao - $faker->word",
        'horario' => $faker->time('H:i'),
        'dieta_id' => $faker->numberBetween(1, 50)
    ];
});
