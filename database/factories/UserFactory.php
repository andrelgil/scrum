<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Group;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(User::class, function (Faker $faker) {
    return [
        'group_id'       => Group::inRandomOrder()->first()->id,
        'name'           => $faker->name,
        'cpf'            => $faker->unique()->cpf(false),
        'rg'             => $faker->rg(false),
        'username'       => $faker->unique()->userName,
        'email'          => $faker->unique()->safeEmail,
        'password'       => Hash::make('123456'),
        'admin'          => $faker->boolean(rand(0,100))
    ];
});


