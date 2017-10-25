<?php

namespace App\Http\Controllers\Backend\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\Controller;
use App\Models\Backend\Categories\Category;
use App\Repo\SubCate;
class CategoryController extends Controller

{


   public function manageCategoryAjax()
    {

        return view('backend.categories.manage-category-ajax');

    }

   public function add()
    {

       return view('backend.categories.manage-category-new');

    }
   
   public function edit(){
       return view('backend.categories.manage-category-edit');
   }
   
    public function index(Request $request)
    {
        $subcate=new SubCate;
        
        try {

            $allSubCategories=$subcate->getCategories();
            
        } catch (Exception $e) {
            
            //no parent category found
        }

        return response()->json($allSubCategories);

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

        $create = Category::create($request->all());

        return response()->json($create);

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