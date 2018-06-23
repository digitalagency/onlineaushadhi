<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    //protected $connection = 'mysql2';

    protected $table = 'tbl_image';

    public function user()
    {
        return $this->belongsTo('App\User', 'client_id');
    }
}
