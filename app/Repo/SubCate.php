<?php
    
    namespace App\Repo;

    /**
    * 
    */
    class SubCate
    {
        
        

        public function getCategories(){

            $categories=\App\Models\Backend\Categories\Category::where('parent_id',0)->paginate(5);//united

            $categories=$this->addRelation($categories);

            return $categories;

        }
        
        public function dropDownCategories(){

            $categories=\App\Models\Backend\Categories\Category::where('parent_id',0)->get();//united

            $categories=$this->addRelation($categories);

            return $categories;

        }

        protected function selectChild($id)
        {
            $categories=\App\Models\Backend\Categories\Category::where('parent_id',$id)->get(); //rooney

            $categories=$this->addRelation($categories);

            return $categories;

        }

        protected function addRelation($categories){

            $categories->map(function ($item, $key) {
                
                $sub=$this->selectChild($item->id); 
                
                return $item=array_add($item,'subCategory',$sub);

            });

            return $categories;
        }
    }