<?php 
namespace App\classes;
use App\classes\Category;
use App\classes\Brand;
class Product{
    public $product =[];
    public $products;
    public $category;
    public $categoryById;
    public $brand;
    public $brandById;
    public $res=[];

    public function __construct(){
        $this->product =[
            0=>[
                'id'=>1,
                'category_id'=>1,
                'brand_id'=>1,
                'name'=> 'New Laptop',
                'price'=> '122200 TK',
                'desc'=> 'Best Laptop',
                'company_Name'=> 'Apple',
                'img'=>'index.jpg',

            ],
            1=>[
                'id'=>2,
                'category_id'=>1,
                'brand_id'=>2,
                'name'=> 'New Laptop',
                'price'=> '120000 TK',
                'desc'=> 'Best Laptop',
                'company_Name'=> 'Asus',
                'img'=>'index.jpg',

            ],
            2=>[
                'id'=>3,
                'category_id'=>1,
                'brand_id'=>3,
                'name'=> 'New Laptop',
                'price'=> '12330 TK',
                'desc'=> 'Best Laptop',
                'company_Name'=> 'Lenovo',
                'img'=>'index.jpg',

            ],
            3=>[
                'id'=>4,
                'category_id'=>2,
                'brand_id'=>4,
                'name'=> 'New Mobile',
                'price'=> '120000 TK',
                'desc'=> 'Best Mobile',
                'company_Name'=> 'Realme',
                'img'=>'mobile.jpg',

            ],
            4=>[
                'id'=>5,
                'category_id'=>2,
                'brand_id'=>5,
                'name'=> 'New Mobile',
                'price'=> '122200 TK',
                'desc'=> 'Best Mobile',
                'company_Name'=> 'Samsung',
                'img'=>'mobile.jpg',

            ],
            5=>[
                'id'=>6,
                'category_id'=>2,
                'brand_id'=>6,
                'name'=> 'New Mobile',
                'price'=> '120440 TK',
                'desc'=> 'Best Mobile',
                'company_Name'=> 'Oppo',
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
            $this->category = new Category();
            $this->categoryById = $this->category->getCategory($product['category_id']);
            $product['category_name']= $this->categoryById['name'];

            $this->brand = new Brand();
            $this->brandById = $this->brand->getBrand($product['brand_id']);
            $product['brand_name']= $this->brandById['name'];

            return $product;
        }
    }
    }
     public function productByCategory($id){
        $this->products=$this->allProduct();
        foreach ($this->products as $product){
            if ($product['category_id']==$id){
                array_push( $this->res,$product);

            }
           
        }
        return $this->res;
     }
   
}