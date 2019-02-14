<?php

use Faker\Generator as Faker;

$factory->define(App\Chat::class, function (Faker $faker) {
    return [
      'libelle' => $faker->name,
      'photo' => $faker->imageUrl($width = 640, $height = 480, 'cats', true, 'Faker'),
    ];
});
