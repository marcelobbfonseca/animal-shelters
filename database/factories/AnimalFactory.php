<?php

use Faker\Generator as Faker;

$factory->define(App\Animal::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'photo' => $faker->name,
        'size' => 'medium',
        'shelter_id' => 1,
        'years_old' => 3,
        //
    ];
});
