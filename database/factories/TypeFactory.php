<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Type::class, function (Faker $faker) {
    return [
        'user_id' => collect(array_column(\App\User::all('id')->toArray(),'id'))->random(),
        'title' => $faker->sentence()
    ];
});
