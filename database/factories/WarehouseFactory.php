<?php
namespace Database\Factories;

use Faker\Generator as Faker;
use App\Models\Warehouse;

$factory->define(Warehouse::class, function (Faker $faker) {
    return [
        'warehouse_number' => $faker->unique()->numberBetween(1, 100),
        'occupancy_status' => $faker->boolean,
    ];
});
