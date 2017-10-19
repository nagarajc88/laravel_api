<?php

namespace App\Models\Backend\Products;

use Illuminate\Database\Eloquent\Model;

class Product_addon extends Model

{

    public $fillable = ['parent_id','name','slug','image','description'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    
    
}