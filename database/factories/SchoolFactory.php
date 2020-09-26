<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\School;
use Faker\Generator as Faker;

$factory->define(School::class, function (Faker $faker) {
    return [
        'profile_kid_id'=> $faker->unique()->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]),
        'school_name'   => $faker->name,
        'school_level'  => $faker->randomElement(['PRIMARIO', 'SECUNDARIO', 'INICIAL']),
        'school_turn'   => $faker->randomElement(['MANANA', 'TARDE']),
        'schedule'      => $faker->randomElement(['08:00/13:00', '13:30/18:00']),
        'street'        => $faker->name,
        'street_number' => $faker->randomElement([145, 236, 398, 1234, 890, 900, 2641, 1089]),
        'locality'      => $faker->word,
        'city'          => $faker->word,
        'phone'         => $faker->phoneNumber,
        'contact_name'  => $faker->name,
        'contact_phone' => $faker->phoneNumber
    ];
});
