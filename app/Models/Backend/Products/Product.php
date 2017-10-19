<?php

namespace App\Models\Backend\Products;

use Illuminate\Database\Eloquent\Model;

class Product extends Model

{

   public $fillable = ['product_name','slug','price','brand','short_description'];

   public function images()
    {
        return $this->hasMany('App\Backend\Products\Product_image');
    } 
  
  public function custom_option()
    {
        return $this->hasMany('App\Backend\Products\Product_option');
    }

  public function custom_option_value()
    {
        return $this->hasMany('App\Backend\Products\Product_option_value');
    }

  public function custom_option_images()
    {
        return $this->hasMany('App\Backend\Products\Product_custom_option_image');
    }  

  public function product_category()
    {
        return $this->hasMany('App\Backend\Products\Product_category');
    } 

  public function product_attribute()
    {
        return $this->hasMany('App\Backend\Products\Product_attribute');
    }

   public function product_addon()
    {
        return $this->hasMany('App\Backend\Products\Product_addon');
    }    
       
}