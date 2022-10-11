<?php include 'pages/header.php'?>

        <section id="Test" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center ">All Student</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-danger">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($students as $value){ ?>
                                            <tr>
                                                <td><?php echo $value['id']?></td>
                                                <td><?php echo $value['name']?></td>
                                                <td><?php echo $value['email']?></td>
                                                <td><?php echo $value['phone']?></td>
                                            </tr>

                                        <?php } ?>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  
 <?php include 'pages/footer.php'?>