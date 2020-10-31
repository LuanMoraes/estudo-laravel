<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pessoa;
use Faker\Generator as Faker;

$factory->define(Pessoa::class, function (Faker $faker) { //cria diversas pessoas passando a quantidade como parâmetro
    return [
        'nome' => $faker->name,
        'telefone' => $faker->tollFreePhoneNumber,
        'email' => $faker->unique()->safeEmail,
        'user_id' => $faker->numberBetween(1,2)
    ];
});
