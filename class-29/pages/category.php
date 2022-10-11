<?php include 'pages/header.php'?>

        <section id="Test" class="mt-4">
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
                <?php foreach ($products as $value){ ?>
                <div class="col-md-4">
                        <div class="card mb-4 cardImg">
                            <img src="assets/img/<?php echo $value['img']?>" alt="">
                            <div class="card-body">
                                <h4>Product Name : <?php echo $value['name']?></h4>
                                <p> Product Price : <?php echo $value['price']?></p>
                                <p> Product Description : <?php echo $value['desc']?></p>
                                <p>Company Name : <?php echo $value['company_Name']?></p>
                                <a href="action.php?page=details&id=<?php echo $value['id']?>" class=" btn btn-outline-primary">Details</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
  
 <?php include 'pages/footer.php'?>