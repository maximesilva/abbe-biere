<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'description'=> $faker->text,
        'price'=> $faker->randomDigit,
        'volume' =>$faker->randomDigit,
        'vat'=> $faker->randomDigit,
        'stock'=> $faker->randomDigit,
        'weight'=> $faker->randomDigit,
        'category_id' => 1
    ];
});
