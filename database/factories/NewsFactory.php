<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'category_id' => rand(1,3),
        'title' => $faker->sentence(),
        'slug' => Str::slug($faker->sentence()),
        'body' => $faker->paragraph(10),
        'user_id' => rand(1,3),
    ];
});
