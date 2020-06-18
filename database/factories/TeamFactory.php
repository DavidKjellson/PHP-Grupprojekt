<?php

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'team_name' => $faker->name,
        'team_activity' => ''
    ];
});
