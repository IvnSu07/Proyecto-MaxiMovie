<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
            <script>
                alert("Por favor debes iniciar Sesión");
                window.location = "index.php";
            </script>
        ';
    session_destroy();
    die();
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxiMovie - Darcarga tus peliculas favoritas!</title>
    <!-- Link to css-->
    <link rel="stylesheet" href="assets/css/styles-maxi.css">
    <!--Fav icon-->
    <link rel="shortcut icon" href="assets/img/fav-icon.png" type="image/x-icon">
    <!--box icon-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <!--header-->

    <header>
        <!--nav-->
        <div class="nav container">
            <!--Logo-->
            <a href="maximovie.html" class="logo">
                Maxi<span>Movie</span>
            </a>
            <!-- Search Box -->
            <div class="search-box">
                <input type="search" name="" id="search-input" placeholder="search movie">
                <i class='bx bx-search'></i>
            </div>
            <!-- User -->
            <a href="#" class="user">
                <img src="assets/img/user.jpg" alt="" class="user-img">
            </a>
            <!-- NavBar -->
            <div class="navbar">
                <a href="#home" class="nav-link nav-active">
                    <i class='bx bx-home'></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="#home" class="nav-link">
                    <i class='bx bxs-hot'></i>
                    <span class="nav-link-title">Trending</span>
                </a>
                <a href="#home" class="nav-link">
                    <i class='bx bx-compass'></i>
                    <span class="nav-link-title">Explore</span>
                </a>
                <a href="#home" class="nav-link">
                    <i class='bx bx-tv'></i>
                    <span class="nav-link-title">Movies</span>
                </a>
                <a href="#home" class="nav-link">
                    <i class='bx bx-heart'></i>
                    <span class="nav-link-title">Favourite</span>
                </a>
                <a href="php/cerrar_sesion.php" class="nav-link">
                    <i class='bx bx-heart'></i>
                    <span class="nav-link-title">Log Out</span>
                </a>
            </div>
        </div>
    </header>
    <!-- Home -->
    <section class="home container" id="home">
        <!--Home image-->
        <img src="assets/img/home-background.png" alt="" class="home-img">
        <!-- Home Text -->
        <div class="home-text">
            <h1 class="home-title">Hitman's Wife's <br>Bodyguard</h1>
            <p>Releasing 10 April</p>
            <a href="#" class="watch-btn">
                <i class='bx bx-right-arrow'></i>
                <span>Watch the trailer</span>
            </a>
        </div>
        <!-- Home End -->
    </section>
    <!-- Popular Section Start-->
    <section class="popular container" id="popular">
        <!-- Heading -->
        <div class="heading">
            <h2 class="heading-title">Popular Movies</h2>
        </div>
    </section>
    <!-- Popular Section End-->




    <!--link to js-->
    <script src="assets/js/main-maxi.js"></script>
</body>

</html>