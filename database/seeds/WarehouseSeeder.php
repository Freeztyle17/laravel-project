<?php

use Illuminate\Database\Seeder;
use App\Models\Warehouse;
use App\Models\WarehouseZone;

class WarehouseSeeder extends Seeder
{
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
