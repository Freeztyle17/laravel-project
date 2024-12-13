<?php

use App\Models\WarehouseDistrict;
use Illuminate\Database\Seeder;
use App\Models\WarehouseZone;

class WarehouseZoneSeeder extends Seeder
{
    public function run()
    {
        $warehouseDistricts = WarehouseDistrict::all();

        $warehouseDistricts->each(function ($district) {
            factory(WarehouseZone::class, 3)->create([
                'warehouse_district_id' => $district->id,
            ]);
        });
    }
}
