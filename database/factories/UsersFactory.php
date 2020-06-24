<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Group;
use App\Models\Users;
use Faker\Generator as Faker;

$factory->define(Users::class, function (Faker $faker) {
    return [
        'group_id'       => Group::inRandomOrder()->first()->id,
        'name'           => $faker->sentence($nbWords = rand(1,4), $variableNbWords = true),
        'cpf'            => $faker->cpf(false),
        'rg'             => $faker->rg(false),
        'username'       => $faker->userName,
        'email'          => $faker->unique()->safeEmail,
        'password'       => '123456'
    ];
});


