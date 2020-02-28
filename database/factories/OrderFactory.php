<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(\App\Order::class, function (Faker $faker) {
    return [

        'customer_id' => factory(Customer::class),
        'created_at' => $faker->dateTime,
        'delivered_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime


    ];
});
