<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

//$factory->define(App\User::class, function (Faker\Generator $faker) {
//    return [
//        'category_id' => $faker->numberBetween(1,0),
//        'photo_id' => 1,
//        'title' => $faker->sentence(7,10),
//        'body' => $faker->paragraph(rand(10,15), true),
//        'slug' => $faker->slug()
//    ];
//});

//$factory->define(App\Role::class, function (Faker\Generator $faker) {
//    return [
//        'name' => $faker->randomElement(['administrator', 'author', 'subscriber']),
//    ];
//});
