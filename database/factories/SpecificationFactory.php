<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Specification;
use Faker\Generator as Faker;

$factory->define(Specification::class, function (Faker $faker) {
    return [
        'nom_specification' => $faker->nom_specification,
    ];
});
