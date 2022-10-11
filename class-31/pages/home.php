<?php include 'pages/header.php'?>

        <section id="Test" class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center ">Student </h3>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="action.php" method="post">
                                    <label for="firstNumber" class="form-label"> Name :</label>
                                    <input id="firstNumber" name="student_name" type="text " class="form-control" placeholder="Name"><br>
                                    <label for="lastNumber" class="form-label"> SEIP ID :</label>
                                    <input id="lastNumber" name="student_seip_id" type="text " class="form-control" placeholder="Phone Number"><br>
                                    <label for="lastNumber" class="form-label"> Email :</label>
                                    <input id="lastNumber" name="student_email" type="text " class="form-control" placeholder="Phone Number"><br>
                                    <label for="lastNumber" class="form-label"> Phone :</label>
                                    <input id="lastNumber" name="student_phone" type="text " class="form-control" placeholder="Phone Number"><br>
                            
                                    <input type="submit" name="submit" class="btn btn-outline-secondary" value="Submit"><br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  
 <?php include 'pages/footer.php'?>