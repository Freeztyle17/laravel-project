<?php

use Illuminate\Database\Seeder;
use App\Models\WarehouseZone;
use App\Models\WarehouseDistrict;

class WarehouseZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $warehouseZones = WarehouseZone::all();

        $warehouseZones->each(function ($zone) {
            factory(Warehouse::class, 2)->create([
                'warehouse_zone_id' => $zone->id,
            ]);
        });
    }
}
