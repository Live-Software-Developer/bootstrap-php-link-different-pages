<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $page_title; ?> | LSD </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary text-white">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="<?php echo $base_url; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo $base_url . 'pages/about-us.php'; ?>">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">WebHosting</a></li>
                            <li><a class="dropdown-item" href="#">Wordpress Hosting</a></li>
                            <li><a class="dropdown-item" href="#">Custom Website Development</a></li>
                            <li><a class="dropdown-item" href="#">Cross-platform App Development</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo $base_url . 'pages/contact-us.php'; ?>">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo $base_url . 'pages/auth/signup.php'; ?>">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo $base_url . 'pages/auth/login.php'; ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo $base_url . 'pages/account/profile.php'; ?>">Account</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>