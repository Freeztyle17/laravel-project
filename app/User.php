<?php

namespace App;

use App\Models\Individual;
use App\Models\LegalEntity;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    //todo поменять на юр физ
    public function fiz() {
        return $this->hasOne(Individual::class);
    }
    public function ur() {
        return $this->hasOne(LegalEntity::class);
    }

}
