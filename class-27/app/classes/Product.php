<?php 
namespace App\classes;
class Product{
    public $product =[];
    public function __construct(){
        $this->product =[
            0=>[
                'id'=>1,
                'Name'=> 'New Laptop',
                'Price'=> '1200 TK',
                'Desc'=> 'Best Laptop',
                'Company_Name'=> 'Asus',
                'img'=>'phone.jpg',

            ],
            1=>[
                'id'=>2,
                'Name'=> 'New Laptop',
                'Price'=> '1200 TK',
                'Desc'=> 'Best Laptop',
                'Company_Name'=> 'apple',
                'img'=>'daining.jpg',

            ],
            2=>[
                'id'=>3,
                'Name'=> 'New Laptop',
                'Price'=> '1200 TK',
                'Desc'=> 'Best Laptop',
                'Company_Name'=> 'Lenovo',
                'img'=>'plan.jpg',

            ],
            3=>[
                'id'=>4,
                'Name'=> 'New Laptop',
                'Price'=> '1200 TK',
                'Desc'=> 'Best Laptop',
                'Company_Name'=> 'Del',
                'img'=>'slide1.jpg',

            ],

            ];
    }
        public function allProduct(){
            return $this->product;
        }
     
   
}