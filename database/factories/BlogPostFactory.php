<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Models\BlogPost::class, function (Faker $faker) {
    $title = $faker->sentence(rand(3, 8), true);
    $isPublished = rand(1, 5) > 1; // если больше единицы, то true - запощено

    $data = [
        'slug'          => Str::slug($title),
        'title'         => $title,
        'img'           => '/uploads/defaultCat.png',
        'excerpt'       => $faker->text(rand(40, 80)),
        'content'       => $faker->realText(rand(1000, 3000)),
        'is_published'  => $isPublished,
        'published_at'  => $isPublished ? now() : null
    ];
    return $data;
});
