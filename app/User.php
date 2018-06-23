<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'reference', 'address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sales()
    {
        return $this->hasMany('App\Sale', 'client_id');
    }

    public function prescriptions()
    {
        return $this->hasMany('App\Prescription', 'client_id');
    }

    public function scopeCountRegisteredThisWeek($query)
    {
        return $query->whereBetween(
            'created_at',
            [
                Carbon::now()->startOfWeek()->format('Y/m/d'),
                Carbon::now()->endOfWeek()->format('Y/m/d')
            ]);
    }
}
