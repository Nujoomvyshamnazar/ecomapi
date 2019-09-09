<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,
        'price' => $faker->numberBetween(100,200),
        'discount' => $faker->numberBetween(2,30),
        'stock' => $faker->randomDigit,
        'detail' => $faker->paragraph,
    ];
});
