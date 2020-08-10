<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Classe;
use App\Spe_Classe;
use Faker\Generator as Faker;

$factory->define(Classe::class, function (Faker $faker) {
    return [
        'nom_classe' => $faker->nom_classe,
        'id_spe_classe' => function() {
            return factory(\App\Spe_Classe::class)->create()->id;
        },
    ];
});
