<?php include 'pages/header.php'?>

<section id="Laptop" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center ">All Product</h3>
                            </div>

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
                    </div>
                </div>
            </div>
        </section>

<?php include 'pages/footer.php'?>
