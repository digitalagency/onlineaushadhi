<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //protected $connection = 'mysql2';

    protected $table = 'tbl_sales';

    public $timestamps = false;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'client_id');
    }

    public function orders()
    {
        return $this->hasMany('App\Order', 'sales_id');
    }
}
