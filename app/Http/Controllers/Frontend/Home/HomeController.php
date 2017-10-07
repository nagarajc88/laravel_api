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
        $products = Product::latest()->paginate(4);
         return response()->json($products);	
    }
    //Secound carousel of new products
    public function getNewPorductsTwo()
    {
        $products = Product::latest()->paginate(4);
         return response()->json($products);    
    }
    //Third carousel of new products
    public function getNewPorductsThree()
    {
        $products = Product::latest()->paginate(4);
         return response()->json($products);    
    }
    //**********************************************************************

    //First carousel of Popular products
    public function getPopularPorductsOne()
    {
        $products = Product::latest()->paginate(4);
         return response()->json($products);    
    }
    //Secound carousel of Popular products
    public function getPopularPorductsTwo()
    {
        $products = Product::latest()->paginate(4);
         return response()->json($products);    
    }
    //Third carousel of Popular products
    public function getPopularPorductsThree()
    {
        $products = Product::latest()->paginate(4);
         return response()->json($products);    
    }
    //Four carousel of Popular products
    public function getPopularPorductsFour()
    {
        $products = Product::latest()->paginate(4);
         return response()->json($products);    
    }
    //Five carousel of Popular products
    public function getPopularPorductsFive()
    {
        $products = Product::latest()->paginate(4);
         return response()->json($products);    
    }
    //Six carousel of Popular products
    public function getPopularPorductsSix()
    {
        $products = Product::latest()->paginate(4);
         return response()->json($products);    
    }
  //***********************************************************************  

}