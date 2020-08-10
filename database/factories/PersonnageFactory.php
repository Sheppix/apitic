<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Personnage;
use App\Classe;
use App\Race;
use App\Specification;
use Faker\Generator as Faker;

$factory->define(Personnage::class, function (Faker $faker) {
    return [
        'nom_personnage' => $faker->nom_personnage,
        'id_armure' => function() {
            return factory(\App\Armure::class)->create()->id;
        },
        'id_specification' => function() {
            return factory(\App\Specification::class)->create()->id;
        },
        'id_race' => function() {
            return factory(\App\Race::class)->create()->id; 
        },
        'id_classe' => function() {
            return factory(\App\Classe::class)->create()->id;
        } 
    ];
});
