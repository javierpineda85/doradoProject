<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile_parent;
use Faker\Generator as Faker;

$factory->define(Profile_parent::class, function (Faker $faker) {
    return [
        'profile_kid_id' => $faker->unique()->numberBetween($min = 1, $max = 20),
        'dni'            => $faker->unique()->numberBetween($min = 1000000, $max = 40000000),
        'numberPhone'    => $faker->phoneNumber,
        'phone2'         => $faker->phoneNumber,
        'baja'           => $faker->randomElement([0]),
    ];
});
          
