<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Classe;
use App\Spe_Classe;
use Faker\Generator as Faker;

$factory->define(Classe::class, function (Faker $faker) {
    return [
        'id_spe_classe' =>Spe_Classe::all()->random()->id,    
    ];
});
