<?php

namespace App\Models\Frontend\Products;

use Illuminate\Database\Eloquent\Model;

class Product_custom_option_image extends Model

{

    public $fillable = ['parent_id','name','slug','image','description'];
    
}