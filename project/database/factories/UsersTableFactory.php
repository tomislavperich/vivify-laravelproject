<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'country' => $faker->country,
        'company' => $faker->company,
        'password' => bcrypt(str_random(7)),
    ];
});
