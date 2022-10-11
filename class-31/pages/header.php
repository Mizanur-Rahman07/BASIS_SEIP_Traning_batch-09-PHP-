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

    <div class="navber_menu bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <a class="navbar-brand  text-white" href="action.php?page=home">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active  text-white" aria-current="page" href="action.php?page=home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  text-white" href="action.php?page=about">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle  text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Product</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <?php foreach ($categories as $category) { ?>
                                        <li><a class="dropdown-item" href="action.php?page=category&id=<?php echo $category['id'] ?>"><?php echo $category['name'] ?></a></li>

                                    <?php } ?>


                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  text-white" href="action.php?page=gallery">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  text-white" href="action.php?page=contact">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  text-white" href="action.php?page=calculator">Calculator</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>