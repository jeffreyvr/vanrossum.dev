<?php

use App\Project;
use App\User;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'slug' => $faker->unique()->slug,
        'title' => $faker->words(5, true),
        'author_id' => factory(User::class)->create()->id,
        'text' => $faker->text(500),
        'client' => $faker->company,
        'status' => 'publish',
        'image' => url('images/twitter-card.jpg'),
        'publish_date' => $faker->dateTimeBetween('-1 years', 'now'),
    ];
});
