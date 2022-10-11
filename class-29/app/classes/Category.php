<?php 
namespace App\classes;
class Category{

    public $categories;
    public function getCategory($id){
        $this->categories= $this->allCategory();
        foreach ($this->categories as $category){
            if ($category['id']==$id){
                return $category;
            }
        }
    }

    public function allCategory(){
        return[
            [
                'id'=>1,
                'name'=> 'Laptop',
            ],
            [
                'id'=>2,
                'name'=> 'Mobile',
            ]
            ];
    }
}