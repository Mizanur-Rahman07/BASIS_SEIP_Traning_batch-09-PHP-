<?php 
namespace App\classes;
class Product{
    public $product =[];
    public $products;
    public $result=[];
    public function __construct(){
        $this->product =[
            0=>[
                'id'=>1,
                'category_id'=>1,
                'brand_id'=>1,
                'name'=> 'New Laptop',
                'price'=> '1200 TK',
                'desc'=> 'Best Laptop',
                'company_Name'=> 'Asus',
                'img'=>'index.jpg',

            ],
            1=>[
                'id'=>2,
                'category_id'=>1,
                'brand_id'=>1,
                'name'=> 'New Laptop',
                'price'=> '1200 TK',
                'desc'=> 'Best Laptop',
                'company_Name'=> 'Asus',
                'img'=>'index.jpg',

            ],
            2=>[
                'id'=>3,
                'category_id'=>1,
                'brand_id'=>1,
                'name'=> 'New Laptop',
                'price'=> '1200 TK',
                'desc'=> 'Best Laptop',
                'company_Name'=> 'Asus',
                'img'=>'index.jpg',

            ],
            3=>[
                'id'=>4,
                'category_id'=>2,
                'brand_id'=>1,
                'name'=> 'New Mobile',
                'price'=> '1200 TK',
                'desc'=> 'Best Mobile',
                'company_Name'=> 'Asus',
                'img'=>'mobile.jpg',

            ],
            4=>[
                'id'=>5,
                'category_id'=>2,
                'brand_id'=>1,
                'name'=> 'New Mobile',
                'price'=> '1200 TK',
                'desc'=> 'Best Mobile',
                'company_Name'=> 'Asus',
                'img'=>'mobile.jpg',

            ],
            5=>[
                'id'=>6,
                'category_id'=>2,
                'brand_id'=>1,
                'name'=> 'New Mobile',
                'price'=> '1200 TK',
                'desc'=> 'Best Mobile',
                'company_Name'=> 'Asus',
                'img'=>'mobile.jpg',

            ],

            ];
    }

    public function allProduct(){
        return $this->product;
    }
    public function productDetails($product_id){
    $this->products=$this->allProduct();
    foreach($this->products as $product){
        if($product['id']==$product_id){
            // array_push($this->result, $product);
            return $product;
        }
    }
    // return $this->result;
    }
     
   
}