<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OldUser extends Model
{
    //protected $connection = 'mysql2';

    protected $table = 'tbl_client';

    public $timestamps = false;

}
