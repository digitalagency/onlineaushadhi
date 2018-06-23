<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $connection = 'mysql2';

    protected $table = 'tbl_medicine';
    
    protected $hidden = ['parent_company_id', 'company_id', 'admin_remarks', 'medicine_description'];

    public function company()
    {
        return $this->belongsTo('App\Company', 'parent_company_id');
    }

    public function scopeRelatedProducts($query, $product)
    {
        return $query->whereComposition($product->composition)
            ->where('id', '!=', $product->id)
            ->where('composition', '!=', '')
            ->limit(5)
            ->get();
    }

    public function scopeAutocompleteSearch($query, $keyword)
    {
        return $query->where('medicine_name', 'LIKE','%'.$keyword.'%')
            ->get(['medicine_name as value', 'id as id', 'slug']);
    }

    public function scopeCreateSitemap($query)
    {
        return $query->where('slug', '!=', '')
            ->orderBy('medicine_name', 'ASC')
            ->get(['slug','publishes_at']);
    }

    /*
    //With Limit
    public function scopeCreateSitemap($query)
    {
        return $query->where('slug', '!=', '')
            ->limit(100)
            ->orderBy('medicine_name', 'ASC')
            ->get(['slug','publishes_at']);
    }
    */
}
