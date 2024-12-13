<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class WarehouseDistrict extends Model
{


    protected $fillable = ['district_number', 'address','image_url', 'city_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function warehouseZones()
    {
        return $this->hasMany(WarehouseZone::class);
    }
}
