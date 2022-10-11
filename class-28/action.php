<?php
require_once 'vendor\autoload.php';

use App\classes\Product;

$product = new Product();
if(isset($_GET['page'])){
    if($_GET ['page']=='home'){
         $products = $product->allProduct();
         include 'pages/home.php';
        
         }elseif($_GET ['page'] =='details'){
            $product_id =$_GET['id'];
            $productById= $product->productDetails($product_id);
            include 'pages/details.php';
         }


      //    elseif($_GET ['page'] =='about'){
      //   include 'pages/about.php';

         // }elseif($_GET ['page'] =='product'){
         //    $product = new Product();
         //    $products = $product->allProduct();
         //    include 'pages/product.php';
         
         
}