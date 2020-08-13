<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Specification;
use Faker\Generator as Faker;

$factory->define(Specification::class, function (Faker $faker) {
    return [
        'nom_specification' => $faker->numberBetween(500,1500),
    ];
});
