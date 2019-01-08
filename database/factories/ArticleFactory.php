<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Article::class, function (Faker $faker) {
    $type = factory(\App\Models\Type::class,1)->create();
    return [
        'type_id' => $type[0]->id,
        'comments' => $faker->numberBetween(1,200),
        'collections' => $faker->numberBetween(10,100),
        'labels' => $faker->numberBetween(1,10),
        'type' => $type[0]->title,
        'cover' => 'https://source.unsplash.com/random/360x'.$faker->numberBetween(200,300),
        'title' => $faker->sentence(),
        'contents' => $faker->paragraph(10),
        'user_id' => collect(array_column(\App\User::all('id')->toArray(),'id'))->random(),
        'sort' => $faker->numberBetween(1,100),
        'publish_at' => $faker->time('Y-m-d H:i:s')
    ];
});
