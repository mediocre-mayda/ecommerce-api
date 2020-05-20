<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word(2),
        'price' => rand(0, 500),
        'details' => $faker->paragraph,
        'image' => 'images/products/' .
            $faker->unique(true)->numberBetween(0, 139) . '.jpg',
        'stock' => rand(0, 1000),
        'discount' => rand(0, 60),
        'featured' => rand(0, 1),
        'category_id' => rand(1, 8),



    ];
});
