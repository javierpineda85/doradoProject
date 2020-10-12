<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile_kid;
use Faker\Generator as Faker;

$factory->define(Profile_kid::class, function (Faker $faker) {
    return [
        'profile_parent_id'=> $faker->unique()->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]),
        'name'             => $faker->firstName,
        'lastName'         => $faker->lastName,
        'file'             => $faker->imageUrl($width=1200, $heigth= 400),
        'dni'              => $faker->unique()->numberBetween($min = 45000000, $max = 60000000),
        'genre'            => $faker->randomElement(['MASCULINO', 'FEMENINO', 'OTRO']),
        'birthday'         => $faker->dateTimeBetween('1900-01-01', 'now'),
                                    
        'diagnostic'       => $faker->sentence,
        'socialMedicine'   => $faker->word,
        'baja'             => $faker->randomElement([0]),
    ];
});

