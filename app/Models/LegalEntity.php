<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegalEntity extends Model
{
    // Указываем, какие атрибуты можно массово назначать
    protected $fillable = [
        'name',
        'inn',
        'phone',
    ];
}
