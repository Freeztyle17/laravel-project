<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Section extends Model
{


    protected $fillable = ['section_number', 'occupancy_status', 'warehouse_id'];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
