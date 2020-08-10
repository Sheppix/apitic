<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Race;
use Faker\Generator as Faker;

$factory->define(Race::class, function (Faker $faker) {
    return [
        'nom_race' => $faker->nom_race
    ];
});
