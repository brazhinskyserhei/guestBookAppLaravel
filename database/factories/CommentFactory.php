<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'text' => $faker->realText(rand(10, 300)),
        'email' => $faker->unique()->safeEmail,
        'user_id' => function () {
            return App\User::inRandomOrder()->first()->id;
        },
        'status' => rand(0,1),
    ];
});
