<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class WarehouseZone extends Model
{


    protected $fillable = ['zone_number', 'occupancy_status', 'warehouse_district_id'];

    public function warehouseDistrict()
    {
        return $this->belongsTo(WarehouseDistrict::class);
    }

    public function warehouses()
    {
        return $this->hasMany(Warehouse::class);
    }
}
