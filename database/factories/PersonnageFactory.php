<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Armure;
use App\Personnage;
use App\Classe;
use App\Race;
use App\Specification;
use Faker\Generator as Faker;

$factory->define(Personnage::class, function (Faker $faker) {
    return [
        'pseudo' => $faker->unique()->userName,
        'id_armure' =>Armure::all()->random()->id,
         'id_specification' => function () {
            return factory(\App\Specification::class)->create()->id;
        }, 
       'id_race' => Race::all()->random()->id,
       'id_classe' => Classe::all()->random()->id,
        'id_user' => function () {
            return factory(\App\User::class)->create()->id;
        } 
    ];
});
