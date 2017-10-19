<?php

namespace App\Models\Frontend\Products;

use Illuminate\Database\Eloquent\Model;

class Product_attribute extends Model

{

    public $fillable = ['parent_id','name','slug','image','description'];

}