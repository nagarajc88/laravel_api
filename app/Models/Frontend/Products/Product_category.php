<?php

namespace App\Models\Frontend\Products;

use Illuminate\Database\Eloquent\Model;

class Product_category extends Model

{

    public $fillable = ['parent_id','name','slug','image','description'];

}