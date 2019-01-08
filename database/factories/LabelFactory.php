<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Label::class, function (Faker $faker) {
    return [
        'user_id' => collect(array_column(\App\User::all('id')->toArray(),'id'))->random(),
        'type_id' => factory(\App\Models\Type::class,1)->create()[0]->id,
        'title' => $faker->sentence()
    ];
});
