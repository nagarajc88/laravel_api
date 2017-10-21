<?php
    
    namespace App\Repo;

    /**
    * 
    */
    class CategoryRepo
    {
        
        

        public function getCategories(){

            $categories=\App\Models\Backend\Categories\Category::where('parent_id',0)
                        ->where('status',1)
                        ->get();//united

            $categories=$this->addRelation($categories);

            return $categories;

        }
        
        public function dropDownCategories(){

            $categories=\App\Models\Backend\Categories\Category::where('parent_id',0)
                        ->where('status',1)
                        ->get();//united

            $categories=$this->addRelation($categories);

            return $categories;

        }

        protected function selectChild($id)
        {
            $categories=\App\Models\Backend\Categories\Category::where('parent_id',$id)
                       ->where('status',1)
                       ->get(); //rooney

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