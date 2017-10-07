<?php

namespace App\Models\Backend\Products;

use Illuminate\Database\Eloquent\Model;

class Product extends Model

{

    public $fillable = ['product_name','slug','price','brand','short_description'];

}