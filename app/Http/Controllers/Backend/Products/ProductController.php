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
use File;
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
         
         print_r($request->all());exit;

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

    public function productImageUpload(Request $request,$id=0){
        $image = $request->file('file');
        $imageName = time().$image->getClientOriginalName();
        $imgName['file'] = $imageName;
        if (! File::exists(public_path()."/backend/images/temp/".$id)) {
            File::makeDirectory(public_path()."/backend/images/temp/".$id,0777,true);
        }
        if (! File::exists(public_path()."/backend/images/products/".$id)) {
            File::makeDirectory(public_path()."/backend/images/products/".$id,0777,true);
        }
        $image->move(public_path('backend/images/temp/'.$id),$imageName);
        $oldfile = public_path().'/backend/images/temp/'.$id.'/'.$imageName;
        $newfile = public_path().'/backend/images/products/'.$id.'/'.$imageName;
        File::move($oldfile, $newfile);
        return response()->json($imgName);
    }


    public function removeProductImage(Request $request){
      $imageName = $request->input('file');
      $id = $request->input('id');
      
      $path = public_path().'/backend/images/products/'.$id.'/'.$imageName;
      print_r($path); exit;
      if(file_exists($path)) {
          unlink($path);
          echo 1;
      }else{
        echo 0;
      }
      // return response()->json(['sucess'=>"file deleted successfully"]);
    } 

}