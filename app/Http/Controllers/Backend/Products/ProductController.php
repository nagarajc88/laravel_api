<?php

namespace App\Http\Controllers\Backend\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\Controller;
use App\Models\Backend\Products\Product;
use App\Models\Backend\Products\Product_attribute;
use App\Models\Backend\Products\Product_addon;
use App\Models\Backend\Products\Product_image;
use App\Models\Backend\Products\Product_category;
use App\Models\Backend\Products\Product_custom_option;
use App\Repo\SubCate;
class ProductController extends Controller
{


   public function manageCategoryAjax()
    {

        return view('backend.products.manage-product-ajax');

    }

   public function add()
    {

       return view('backend.products.manage-product-new');

    }
   
   public function edit(){
       return view('backend.products.manage-product-edit');
   }

    public function index(Request $request)
    {
        $products = Product::latest()->paginate(5);
        
        // print_r($products);exit;
        return response()->json($products);

    }


    public function dropdownCategories(Request $request){
        $subcate=new SubCate;
        
        try {

            $allSubCategories=$subcate->dropDownCategories();
            
        } catch (Exception $e) {
            
            //no parent category found
        }

        return response()->json($allSubCategories);
    }


    public function store(Request $request)
    {
       
       $this->validate($request, [
                'product_name' => 'required'
            ]
         );
         
         print_r($request->product_categories);exit;
        $product = Product::create([
              'product_name' => $request->product_name,
              'slug' => $request->product_name
            ]);

        // $product_attribute = Product_attribute::create([
        //     'product_id' => $product->id
        //     ]);

        return response()->json($product);

    }


    public function update(Request $request, $id)

    {

        $edit = Category::find($id)->update($request->all());

        return response()->json($edit);

    }

    public function destroy($id)

    {

        Category::find($id)->delete();

        return response()->json(['done']);

    }

}