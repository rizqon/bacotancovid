<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'tweet_id' => $faker->randomNumber(5),
        'text' => $faker->text(rand(100, 200)),
        'username' => 'rizqonsadida',
        'avatar' => 'http://pbs.twimg.com/profile_images/1178435712942665729/HyIRzVlD_normal.jpg',
        'time' => Carbon::now()->timestamp
    ];
});
