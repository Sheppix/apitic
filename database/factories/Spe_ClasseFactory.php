<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Spe_Classe;
use Faker\Generator as Faker;

$factory->define(Spe_Classe::class, function (Faker $faker) {
    return [
        'nom_spe_classe' => $faker->nom_spe_classe
    ];
});
