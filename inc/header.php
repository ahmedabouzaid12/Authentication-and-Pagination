<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cleaning Blog</title>
    <link rel="icon" type="image/x-icon" href="<?= BASE_URL.'public/' ?>assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href=" <?= BASE_URL.'public/' ?>css/styles.css" rel="stylesheet" />
    <style>
        body {
                font-family: 'Cairo', sans-serif;
            }

            h1, h2, h3, h4, h5, h6, .site-heading {
                font-family: 'El Messiri', serif;
            }
            
    </style>
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= BASE_URL;?>index.php?page=home">Home</a></li>
    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= BASE_URL;?>index.php?page=about">About</a></li>
    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= BASE_URL;?>index.php?page=home">Simple Posts</a></li>
    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= BASE_URL;?>index.php?page=contact">Contact</a></li>
    
    <?php if (isset($_SESSION['user_logged_in'])): ?>
        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= BASE_URL;?>index.php?page=add-user">Add User</a></li>
        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= BASE_URL;?>index.php?page=logout">Logout</a></li>
        <?php endif; ?>
        <?php if (!isset($_SESSION['user_logged_in'])): ?>
        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= BASE_URL;?>index.php?page=login">Login</a></li>
    <?php endif; ?>
</ul>




            </div>
        </div>
    </nav>