<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserContact;
use Faker\Generator as Faker;

$factory->define(UserContact::class, function (Faker $faker) {
    $phone = preg_replace("/\D/", "", $faker->phoneNumber);
    $phone = substr($phone, 0, 10);

    $cell = preg_replace("/\D/", "", $faker->phoneNumber);
    $cell = substr($cell, 0, 10);

    return [
        'postalcode' => substr($faker->postcode(), 0, 7),
        'address'    => $faker->streetName,
        'number'     => $faker->buildingNumber,
        'district'   => $faker->streetSuffix,
        'city'       => $faker->city,
        'state'      => $faker->stateAbbr,
        'phone'      => $phone,
        'cell'       => $cell,
    ];
});
