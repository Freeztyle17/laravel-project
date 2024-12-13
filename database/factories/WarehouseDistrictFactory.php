<?php
namespace Database\Factories;

use Faker\Generator as Faker;
use App\Models\WarehouseDistrict;

$factory->define(WarehouseDistrict::class, function (Faker $faker) {
    $imageNumber = $faker->numberBetween(1, 15);

    return [
        'district_number' => 'WD-' . $faker->unique()->numberBetween(1, 100),
        'address' => $faker->address,
        'image_url' => "{$imageNumber}.jpg",
        'square_number' =>$faker->unique()->numberBetween(100, 1000),// Генерируем строку в формате (число от 1 до 15).jpg
    ];
});
