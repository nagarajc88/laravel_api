<?php

namespace App\Http\Controllers\Frontend\Details;
use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\Controller;
use App\Models\Frontend\Products\Product;
class DetailsController extends Controller
{

    //load cart page frontend
    public function manageDetails()
    {
      return view('frontend.details.details');
    }

    public function product_details(Request $request){
        $id = $request->id;   
        $productdetails = Product::select('products.product_id','products.request_product','categories.name','product_name','product_tagline','short_description','full_description','price','sp_price','products.slug as pslug','image_name','category_id','products.limited','products.is_custom','products.min_quantity','products.max_quantity', 'products.quantity','products.vat')
                ->leftJoin('product_category', 'product_category.product_id', '=', 'products.product_id')
                ->leftJoin('categories', 'categories.id', '=', 'product_category.category_id') 
                ->leftJoin('product_images', 'product_images.product_id', '=', 'products.product_id')
                ->leftJoin('product_addon', 'product_addon.product_id', '=', 'products.product_id')
                ->leftJoin('product_attributes', 'product_attributes.product_id', '=', 'products.product_id')
                ->where('categories.status', '1')
                ->where('categories.status', '1')
                ->where('products.product_id',$id)
                ->groupBy('products.product_id')
                ->orderBy('products.sort', 'asc')
                ->orderBy('categories.sort', 'asc')
                ->take(4)
                ->get();
         return response()->json($productdetails);

    }
}