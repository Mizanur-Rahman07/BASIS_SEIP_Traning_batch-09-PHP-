<?php  include 'pages/header.php'?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center"> Contact Form</h1>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" >
                        <form action="action.php" method="post">
                            <label for="firstName" class="form-label"> First Name :</label>
                            <input id="firstName" name="first_name" type="text " class="form-control" value="<?php echo isset($firstName)?$firstName :' ' ?>" placeholder="First Name"><br>
                            <label for="lastName" class="form-label"> Last Name :</label>
                            <input id="lastName" name="last_name" type="text " class="form-control" value="<?php echo isset($lastName)? $lastName :' ' ?>" placeholder="Last Name"><br>
                            <label for="fullName" class="form-label"> Full Name :</label>
                            <input id="fullName" name="full_name" type="text " class="form-control" value="<?php echo isset($fullName)? $fullName :' ' ?>" placeholder="Full Name"><br>
                            <input type="submit" name="result" class="btn btn-outline-secondary" value="Make Full Name"><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php  include 'pages/footer.php'?>
