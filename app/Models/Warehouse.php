<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{


    protected $fillable = ['warehouse_number', 'occupancy_status', 'warehouse_zone_id'];

    public function warehouseZone()
    {
        return $this->belongsTo(WarehouseZone::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
