<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    $order_status = ['completed', 'pending', 'cancelled'];
    return [
        'OrderId' => $faker->randomNumber(6),
        'CustomerId' => Customer::all()->random()->CustomerId,
        'OrderStatus' => $faker->randomElement(['completed', 'pending', 'cancelled']),
        'OrderTotal' => $faker->numberBetween(10, 10000),
        'CreatedDateTime' => $faker->dateTimeBetween('-13 Months'),
    ];
});
