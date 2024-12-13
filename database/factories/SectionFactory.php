<?php

namespace Database\Factories;


use Faker\Generator as Faker;
use App\Models\Section;

$factory->define(Section::class, function (Faker $faker) {
    return [
        'section_number' => $faker->unique()->numberBetween(1, 100),
        'occupancy_status' => $faker->boolean,
    ];
});