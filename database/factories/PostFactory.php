<?php

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'slug' => $faker->unique()->slug(),
        'title' => $faker->words(5, true),
        'author_id' => factory(User::class)->create()->id,
        'text' => $faker->text(500),
        'status' => 'publish',
        'publish_date' => $faker->dateTimeBetween('-1 years', 'now'),
    ];
});
