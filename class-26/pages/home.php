<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <section id="Test" class="py-5">
            <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="action.php?page=home">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="action.php?page=home">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="action.php?page=home">Features</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="action.php?page=home">Pricing</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="action.php?page=home">Disabled</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </nav>


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
  
    </main>
   
    <script src="assets/js/bootstrap.bundle.min.js" ></script>
</body>
</html>