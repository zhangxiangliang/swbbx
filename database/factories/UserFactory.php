<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

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

$factory->define(User::class, function (Faker\Generator $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'remember_token' => Str::random(10),
        'email_verified_at' => now(),
        'avatar' => 'https://cdn.learnku.com/uploads/avatars/45055_1563272304.jpeg',
        'password' => Hash::make('123456'),
        'introduction' => $faker->sentence(),
        'created_at' => Carbon::parse($date_time)->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::parse($date_time)->format('Y-m-d H:i:s'),
    ];
});
