<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Movie::class, function (Faker $faker){
    $genresExamples = collect([
        'Comedy',
        'Action',
        'Drama',
        'Horror',
        'Documentary'
    ]);

    return [
        'name' => $faker->text(80),
        'director' => $faker->name,
        'image_url' => $faker->imageUrl(),
        'duration' => $faker->numberBetween(60, 200),
        'release_date' => $faker->date(),
        'genres' => $genresExamples->random(3)
    ];
});
