<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ad;
use Faker\Generator as Faker;

$factory->define(Ad::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'image' => 'images/ads/' . $faker->unique(true)->numberBetween(0, 20) . '.jpg',
    ];
});
