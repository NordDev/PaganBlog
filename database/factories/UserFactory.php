<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $isAdmin = rand(1, 4) == 1;
    $isBanned = rand(1, 4) == 4;
    $data = [
        'name'              => $faker->name,
        'email'             => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'is_admin'          => $isAdmin,
        'is_banned'         => $isBanned,
        'avatar'            => '/uploads/defaultAvatar.jpeg',
        'phone_number'      => $faker->phoneNumber,
        'bio'               => $faker->realText(rand(50, 100)),
        'count_posts'       => rand(1, 50),
        'remember_token'    => Str::random(10),
    ];
    return $data;
});
