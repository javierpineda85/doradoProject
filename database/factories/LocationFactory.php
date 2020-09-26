<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [
        'street'        => $faker->name,
        'street_number' => $faker->randomElement([145, 236, 398, 1234, 890, 900, 2641, 1089]),
        'street_house'  => $faker->randomElement([null, 1, 2, 3]),
        'locality'      => $faker->word,
        'city'          => $faker->cityName
    ];
});
