<?php 
namespace App\classes;
class Brand{

    public $brands;
    public function getBrand($id){
        $this->brands= $this->allBrand();
        foreach ($this->brands as $brand){
            if ($brand['id']==$id){
                return $brand;
            }
        }
    }

    public function allBrand(){
        return[
            [
                'id'=>1,
                'name'=> 'Apple',
            ],
            [
                'id'=>2,
                'name'=> 'Asus',
            ],
            [
                'id'=>3,
                'name'=> 'Lenovo',
            ],
            [
                'id'=>4,
                'name'=> 'Realme',
            ],
            [
                'id'=>5,
                'name'=> 'Samsung',
            ],
            [
                'id'=>6,
                'name'=> 'Oppo',
            ],
            ];
    }
}