<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(PicsumPhotosProvider::class, function (Faker $faker) {
    return [
        'url' => $faker->imageUrl(640, 480)
    ];
});
