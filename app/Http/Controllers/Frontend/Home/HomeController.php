<?php

namespace App\Http\Controllers\Frontend\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\Controller;
use App\Models\Frontend\Products\Product;
class HomeController extends Controller
{

    //load home page frontend
    public function manageHome()
    {
      return view('frontend.home.manage-home');
    }
   
    //******************************************************************** 
    //First carousel of new products
    public function getNewPorductsOne()
    {   
      $products = Product::select('products.product_id','products.request_product','categories.name','product_name','product_tagline','short_description','full_description','price','sp_price','products.slug as pslug','image_name','category_id','products.limited','products.is_custom','products.min_quantity','products.max_quantity', 'products.quantity','products.vat')
                ->leftJoin('product_category', 'product_category.product_id', '=', 'products.product_id')
                ->leftJoin('categories', 'categories.id', '=', 'product_category.category_id') 
                ->leftJoin('product_images', 'product_images.product_id', '=', 'products.product_id')
                ->leftJoin('product_addon', 'product_addon.product_id', '=', 'products.product_id')
                ->leftJoin('product_attributes', 'product_attributes.product_id', '=', 'products.product_id')
                ->where('categories.status', '1')
                ->where('products.status', '1')
                ->groupBy('products.product_id')
                ->orderBy('products.sort', 'asc')
                ->orderBy('categories.sort', 'asc')
                ->take(4)
                ->get();
         return response()->json($products);	
    }
    //Secound carousel of new products
    public function getNewPorductsTwo()
    {
        $products = Product::select('products.product_id','products.request_product','categories.name','product_name','product_tagline','short_description','full_description','price','sp_price','products.slug as pslug','image_name','category_id','products.limited','products.is_custom','products.min_quantity','products.max_quantity', 'products.quantity','products.vat')
                ->leftJoin('product_category', 'product_category.product_id', '=', 'products.product_id')
                ->leftJoin('categories', 'categories.id', '=', 'product_category.category_id') 
                ->leftJoin('product_images', 'product_images.product_id', '=', 'products.product_id')
                ->leftJoin('product_addon', 'product_addon.product_id', '=', 'products.product_id')
                ->leftJoin('product_attributes', 'product_attributes.product_id', '=', 'products.product_id')
                ->where('categories.status', '1')
                ->where('products.status', '1')
                ->groupBy('products.product_id')
                ->orderBy('products.sort', 'asc')
                ->orderBy('categories.sort', 'asc')
                ->skip(4)
                ->take(4)
                ->get();
         return response()->json($products);    
    }
    //Third carousel of new products
    public function getNewPorductsThree()
    {
        $products = Product::select('products.product_id','products.request_product','categories.name','product_name','product_tagline','short_description','full_description','price','sp_price','products.slug as pslug','image_name','category_id','products.limited','products.is_custom','products.min_quantity','products.max_quantity', 'products.quantity','products.vat')
                ->leftJoin('product_category', 'product_category.product_id', '=', 'products.product_id')
                ->leftJoin('categories', 'categories.id', '=', 'product_category.category_id') 
                ->leftJoin('product_images', 'product_images.product_id', '=', 'products.product_id')
                ->leftJoin('product_addon', 'product_addon.product_id', '=', 'products.product_id')
                ->leftJoin('product_attributes', 'product_attributes.product_id', '=', 'products.product_id')
                ->where('categories.status', '1')
                ->where('products.status', '1')
                ->groupBy('products.product_id')
                ->orderBy('products.sort', 'asc')
                ->orderBy('categories.sort', 'asc')
                ->skip(8)
                ->take(4)
                ->get();
         return response()->json($products);   
    }
    //**********************************************************************

    //First carousel of Popular products
    public function getPopularPorductsOne()
    {
        $products = Product::select('products.product_id','products.request_product','categories.name','product_name','product_tagline','short_description','full_description','price','sp_price','products.slug as pslug','image_name','category_id','products.limited','products.is_custom','products.min_quantity','products.max_quantity', 'products.quantity','products.vat')
                ->leftJoin('product_category', 'product_category.product_id', '=', 'products.product_id')
                ->leftJoin('categories', 'categories.id', '=', 'product_category.category_id') 
                ->leftJoin('product_images', 'product_images.product_id', '=', 'products.product_id')
                ->leftJoin('product_addon', 'product_addon.product_id', '=', 'products.product_id')
                ->leftJoin('product_attributes', 'product_attributes.product_id', '=', 'products.product_id')
                ->where('categories.status', '1')
                ->where('products.status', '1')
                ->groupBy('products.product_id')
                ->orderBy('products.sort', 'asc')
                ->orderBy('categories.sort', 'asc')
                ->take(6)
                ->get();
         return response()->json($products);  
    }
    //Secound carousel of Popular products
    public function getPopularPorductsTwo()
    {
        $products = Product::select('products.product_id','products.request_product','categories.name','product_name','product_tagline','short_description','full_description','price','sp_price','products.slug as pslug','image_name','category_id','products.limited','products.is_custom','products.min_quantity','products.max_quantity', 'products.quantity','products.vat')
                ->leftJoin('product_category', 'product_category.product_id', '=', 'products.product_id')
                ->leftJoin('categories', 'categories.id', '=', 'product_category.category_id') 
                ->leftJoin('product_images', 'product_images.product_id', '=', 'products.product_id')
                ->leftJoin('product_addon', 'product_addon.product_id', '=', 'products.product_id')
                ->leftJoin('product_attributes', 'product_attributes.product_id', '=', 'products.product_id')
                ->where('categories.status', '1')
                ->where('products.status', '1')
                ->groupBy('products.product_id')
                ->orderBy('products.sort', 'asc')
                ->orderBy('categories.sort', 'asc')
                ->skip(6)
                ->take(6)
                ->get();
         return response()->json($products);   
    }
    //Third carousel of Popular products
    public function getPopularPorductsThree()
    {
        $products = Product::select('products.product_id','products.request_product','categories.name','product_name','product_tagline','short_description','full_description','price','sp_price','products.slug as pslug','image_name','category_id','products.limited','products.is_custom','products.min_quantity','products.max_quantity', 'products.quantity','products.vat')
                ->leftJoin('product_category', 'product_category.product_id', '=', 'products.product_id')
                ->leftJoin('categories', 'categories.id', '=', 'product_category.category_id') 
                ->leftJoin('product_images', 'product_images.product_id', '=', 'products.product_id')
                ->leftJoin('product_addon', 'product_addon.product_id', '=', 'products.product_id')
                ->leftJoin('product_attributes', 'product_attributes.product_id', '=', 'products.product_id')
                ->where('categories.status', '1')
                ->where('products.status', '1')
                ->groupBy('products.product_id')
                ->orderBy('products.sort', 'asc')
                ->orderBy('categories.sort', 'asc')
                ->skip(12)
                ->take(6)
                ->get();
         return response()->json($products);    
    }
    //Four carousel of Popular products
    public function getPopularPorductsFour()
    {
        $products = Product::select('products.product_id','products.request_product','categories.name','product_name','product_tagline','short_description','full_description','price','sp_price','products.slug as pslug','image_name','category_id','products.limited','products.is_custom','products.min_quantity','products.max_quantity', 'products.quantity','products.vat')
                ->leftJoin('product_category', 'product_category.product_id', '=', 'products.product_id')
                ->leftJoin('categories', 'categories.id', '=', 'product_category.category_id') 
                ->leftJoin('product_images', 'product_images.product_id', '=', 'products.product_id')
                ->leftJoin('product_addon', 'product_addon.product_id', '=', 'products.product_id')
                ->leftJoin('product_attributes', 'product_attributes.product_id', '=', 'products.product_id')
                ->where('categories.status', '1')
                ->where('products.status', '1')
                ->groupBy('products.product_id')
                ->orderBy('products.sort', 'asc')
                ->orderBy('categories.sort', 'asc')
                ->skip(18)
                ->take(6)
                ->get();
         return response()->json($products);    
    }
    //Five carousel of Popular products
    public function getPopularPorductsFive()
    {
        $products = Product::select('products.product_id','products.request_product','categories.name','product_name','product_tagline','short_description','full_description','price','sp_price','products.slug as pslug','image_name','category_id','products.limited','products.is_custom','products.min_quantity','products.max_quantity', 'products.quantity','products.vat')
                ->leftJoin('product_category', 'product_category.product_id', '=', 'products.product_id')
                ->leftJoin('categories', 'categories.id', '=', 'product_category.category_id') 
                ->leftJoin('product_images', 'product_images.product_id', '=', 'products.product_id')
                ->leftJoin('product_addon', 'product_addon.product_id', '=', 'products.product_id')
                ->leftJoin('product_attributes', 'product_attributes.product_id', '=', 'products.product_id')
                ->where('categories.status', '1')
                ->where('products.status', '1')
                ->groupBy('products.product_id')
                ->orderBy('products.sort', 'asc')
                ->orderBy('categories.sort', 'asc')
                ->skip(24)
                ->take(6)
                ->get();
         return response()->json($products);    
    }
    //Six carousel of Popular products
    public function getPopularPorductsSix()
    {
        $products = Product::select('products.product_id','products.request_product','categories.name','product_name','product_tagline','short_description','full_description','price','sp_price','products.slug as pslug','image_name','category_id','products.limited','products.is_custom','products.min_quantity','products.max_quantity', 'products.quantity','products.vat')
                ->leftJoin('product_category', 'product_category.product_id', '=', 'products.product_id')
                ->leftJoin('categories', 'categories.id', '=', 'product_category.category_id') 
                ->leftJoin('product_images', 'product_images.product_id', '=', 'products.product_id')
                ->leftJoin('product_addon', 'product_addon.product_id', '=', 'products.product_id')
                ->leftJoin('product_attributes', 'product_attributes.product_id', '=', 'products.product_id')
                ->where('categories.status', '1')
                ->where('products.status', '1')
                ->groupBy('products.product_id')
                ->orderBy('products.sort', 'asc')
                ->orderBy('categories.sort', 'asc')
                ->skip(30)
                ->take(6)
                ->get();
         return response()->json($products);   
    }
  //***********************************************************************  
  
}