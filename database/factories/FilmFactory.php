<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Film;

$factory->define(Film::class, function (Faker $faker) {
    $genres = ['War', 'Romantic', 'Drama', 'Animation', 'Documentary', 'Adventure', 'Comedy'];

    return [
        'title' => $faker -> unique() -> word,
        'film_director' => $faker -> name($gender = null),
        'description' => $faker -> text(150),
        'genre' => $faker -> randomElement($genres),
        'rating' => rand(1,5)
    ];
});
