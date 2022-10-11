<?php include 'pages/header.php'?>

        <section id="Test" class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center ">Update Student </h3>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="action.php" method="POST">
                                    <label for="firstNumber" class="form-label"> Name :</label>
                                    <input id="firstNumber" name="stu_name" type="text " class="form-control" placeholder="Name"><br>
                                    <label for="lastNumber" class="form-label">Roll:</label>
                                    <input id="lastNumber" name="roll" type="text " class="form-control" placeholder="Phone Number"><br>
                                    <label for="lastNumber" class="form-label"> Phone :</label>
                                    <input id="lastNumber" name="phone" type="text " class="form-control" placeholder="Phone Number"><br>
                                    <label for="lastNumber" class="form-label"> Gmail :</label>
                                    <input id="lastNumber" name="gmail" type="text " class="form-control" placeholder="Phone Number"><br>
                                    <label for="lastNumber" class="form-label"> Dept :</label>
                                    <input id="lastNumber" name="dept" type="text " class="form-control" placeholder="Phone Number"><br>
                                    <label for="lastNumber" class="form-label"> Address :</label>
                                    <input id="lastNumber" name="stu_address" type="text " class="form-control" placeholder="Phone Number"><br>
                            
                                    <input type="submit" name="submit" class="btn btn-outline-secondary" value="Submit"><br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  
 <?php include 'pages/footer.php'?>