<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //protected $connection = 'mysql2';

    protected $table = 'tbl_company';
    
    protected $hidden = ['flag', 'status', 'parent_id', 'landline'];

    public function product()
    {
        return $this->hasMany('\App\Product', 'parent_company_id', 'id');
    }
    
}
