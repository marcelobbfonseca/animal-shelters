<?php

use Faker\Generator as Faker;
use App\Shelter;

$factory->define(App\Shelter::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'cnpj'=> '22825726000104',
        'status'=> 'stable',
        'animal_vacancies' => $faker->randomDigitNotNull,
    ];
});
