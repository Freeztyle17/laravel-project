<?php

use Illuminate\Database\Seeder;
use App\Models\WarehouseDistrict;
use App\Models\City;
class WarehouseDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = City::all();

        $cities->each(function ($city) {
            factory(WarehouseDistrict::class, 4)->create([
                'city_id' => $city->id,
            ]);
        });
    }
}
