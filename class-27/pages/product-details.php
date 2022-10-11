<?php include 'pages/header.php'?>
<div class="container">
        <h2 class="text-center">Product Details</h2>
        <div class="row py-5">
                            <?php foreach ($products as $value){ ?>
                                <div class="col-md-4">
                                    <div class="card mb-4 cardImg">
                                        <img src="assets/img/<?php echo $value['img']?>" alt="">
                                        <div class="card-body">
                                            <h4><?php echo $value['Name']?></h4>
                                            <p><?php echo $value['Price']?></p>
                                            <p><?php echo $value['Desc']?></p>
                                            <p><?php echo $value['Company_Name']?></p>
                                            <a href="action.php?page=product-details&&id=<?php echo $value['id']?>" class=" btn btn-outline-primary">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>


    </div>
<?php include 'pages/footer.php'?>