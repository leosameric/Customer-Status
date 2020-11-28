<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\CustomerStatus;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Customer::class, function (Faker $faker) {
    return [ 
        'CustomerId' => $faker->randomNumber(5),
        'CustomerStatusId' => CustomerStatus::all()->random()->CustomerStatusId,
        'Name' => $faker->firstName,
    ];
});
