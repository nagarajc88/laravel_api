<?php

namespace App\Models\Frontend\Categories;

use Illuminate\Database\Eloquent\Model;

class Category extends Model

{

    public $fillable = ['parent_id','name','slug','image','description'];

}