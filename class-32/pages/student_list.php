<?php include 'pages/header.php'?>

        <section id="Test" class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center ">Student List</h3>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Roll</th>
                                        <th>Phone</th>
                                        <th>Gmail</th>
                                        <th>Dept</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php foreach ($studentInfo as $value){ ?>
                                    <tr>
                                        <td><?php echo $value['id']?></td>
                                        <td><?php echo $value['stu_name']?></td>
                                        <td><?php echo $value['roll']?></td>
                                        <td><?php echo $value['phone']?></td>
                                        <td><?php echo $value['gmail']?></td>
                                        <td><?php echo $value['dept']?></td>
                                        <td><?php echo $value['stu_address']?></td>
                                        <td>
                                            <a href="action.php?" class="btn btn-success">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                         </td>
                                    </tr>
                                        <?php }?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  
 <?php include 'pages/footer.php'?> 