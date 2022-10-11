<?php include 'pages/header.php'?>
<div class="container">
        <div class="row">
                <div class="col-md-12">
                <div class="card">
                        <div class="card-header">
                        <h3 class="text-center ">All Product Info</h3>
                        </div>
                </div>
                </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
               <!-- <div class="card"> -->
                    <img src="assets/img/<?php echo $productById['img']?>" alt="">
               <!-- </div> -->
            </div>
            <div class="col-md-8">
               <div class="card mb-4">
                    <div class="card-body">
                        <h4>Product Name : <?php echo $productById['name']?></h4>
                        <p> Product Category : <?php echo $productById['category_name']?></p>
                        <p> Brand : <?php echo $productById['brand_name']?></p>
                        <p> Product Price : <?php echo $productById['price']?></p>
                        <p> Product Description : <?php echo $productById['desc']?></p>
                        <p>Company Name : <?php echo $productById['company_Name']?></p>
                        <a href="" class=" btn btn-outline-primary">Add to Cart</a>
                   </div>
               </div>
           </div>
        </div>
</div>
<?php include 'pages/footer.php'?>