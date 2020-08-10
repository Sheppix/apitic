<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Armure;
use Faker\Generator as Faker;

$factory->define(Armure::class, function (Faker $faker) {
    return [
        'nom_armure' => $faker->nom_armure,
    ];
});
