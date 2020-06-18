<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Place;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(Place::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'location' => [37.774929, -122.419415],
        // 'location' => DB::raw("(GeomFromText('POINT(37.774929 -122.419415)'))"),
    ];
});
