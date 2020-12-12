<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use App\Model\Category;
use Faker\Generator as Faker;


$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'price' => $faker->randomFloat(100, 0, 1000),
        'image' => $faker->imageUrl,
        'category_id' => function () {
            return Category::all()->random();
        }
    ];
});
