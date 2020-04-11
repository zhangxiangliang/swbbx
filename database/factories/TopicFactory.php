<?php

use App\Models\Topic;
use Illuminate\Support\Carbon;

$factory->define(Topic::class, function (Faker\Generator $faker) {

    $sentence = $faker->sentence();

    // 随机取一个月以内的时间
    $updated_at = $faker->dateTimeThisMonth();

    // 传参为生成最大时间不超过，因为创建时间需永远比更改时间要早
    $created_at = $faker->dateTimeThisMonth($updated_at);

    return [
        'title' => $sentence,
        'body' => $faker->text(),
        'excerpt' => $sentence,
        'created_at' => Carbon::parse($created_at)->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::parse($updated_at)->format('Y-m-d H:i:s'),
    ];
});
