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
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
  // factoring for products

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(4),
        'image' => 'storage/9/majca_peja_bela.jpg',
        'description' => $faker->paragraph(2),
        'price' => $faker->numberBetween(10, 1000),
        'size' => $faker->sentence(5),
        'color' => $faker->sentence(5),
        'quantity' => $faker->numberBetween(1, 10000),
    ];
});
