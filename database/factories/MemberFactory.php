<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'email' =>
        $faker->unique()->safeEmail,
        'password' => $faker->password,
        'birth_year' => $faker->year,
        'member_fee' => $faker->boolean,
        'first_name' => $faker->name,
        'is_admin' => $faker->boolean,
    ];
});
