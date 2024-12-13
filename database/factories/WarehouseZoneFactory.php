<?php
namespace Database\Factories;

use Faker\Generator as Faker;
use App\Models\WarehouseZone;

$factory->define(WarehouseZone::class, function (Faker $faker) {
    return [
        'zone_number' =>'WZ-' .  $faker->unique()->numberBetween(1, 100),
        'occupancy_status' => $faker->boolean,
    ];
});
