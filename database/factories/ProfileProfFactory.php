<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile_prof;
use Faker\Generator as Faker;

$factory->define(Profile_prof::class, function (Faker $faker) {
    return [
        'dni'             => $faker->unique()->numberBetween($min = 1000000, $max = 70000000),
        'cuil'            => $faker->unique()->numberBetween($min = 1000000, $max = 70000000),
        'birthday'        => $faker->dateTimeBetween('1900-01-01', 'now'),
                                    
        'phone'           => $faker->phoneNumber,
        'specialty'       => $faker->jobTitle,
        'matricula'       => $faker->unique()->randomNumber($nbDigits = 4),
        'venc_matricula'  =>$faker->dateTimeBetween('1900-01-01', 'now'),
                                    
        'rnp'             => $faker->unique()->randomNumber($nbDigits = 4),
        'venc_rnp'        => $faker->dateTimeBetween('1900-01-01', 'now'),
                                    
        'baja'            => $faker->randomElement([0]),
    ];
});

