<?php
include "databases/database.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="fontawsm/css/all.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flipimages.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Hayat Mountain Trip</title>
    <link rel="icon" type="image/x-icon" href="Images/icon.jpg" class="rounded-circle">
</head>

<body class="body">
    <div class="header sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light navbg ">
            <a class="navbar-brand text-white" href="index.php"><img src="Images/Logo/newlogo.png" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-snowflake navicon"></i> Chitral</a>
                        <div class="dropdown-menu  mt-2" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item nav-item text-white" href="introduction.php">Introduction to Chitral</a>
                            <a class="dropdown-item nav-item text-white" href="introduction.php#besttimetovisit">Best Time to Visit Chitral</a>
                            <a class="dropdown-item nav-item text-white" href="introduction.php#how-to-access">How to Access</a>
                            <a class="dropdown-item nav-item text-white" href="introduction.php#pple-of-chi">People of Chitral</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list-ul navicon"></i> Things to Do</a>
                        <div class="dropdown-menu  mt-2" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item nav-item text-white" href="tdrculture.php">Tradition and Culture</a>
                            <a class="dropdown-item nav-item text-white" href="tdrculture.php#events-festivals">Events and Festivals</a>
                            <a class="dropdown-item nav-item text-white" href="trecking.php">Trekking & Skiing</a>
                            <a class="dropdown-item nav-item text-white" href="trecking.php#jeep_safari">Jeep Safari</a>
                            <a class="dropdown-item nav-item text-white" href="shopingmainpage.php">Shoping</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-location-arrow navicon"></i>Famous Places</a>
                        <div class="dropdown-menu  mt-2" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item nav-item text-white" href="famousplaces.php#kalash_valley">Kalash Valley</a>
                            <a class="dropdown-item nav-item text-white" href="famousplaces.php#shandoor-id">Shandoor Polo Ground</a>
                            <a class="dropdown-item nav-item text-white" href="famousplaces.php#gc-id">Garam Chashma</a>
                            <a class="dropdown-item nav-item text-white" href="famousplaces.php#boro-valley">Boroghol Valley</a>
                            <a class="dropdown-item nav-item text-white" href="famousplaces.php#chitralgolnationalpark">Chitral-gol National Park</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="hotel.php" id="navbarDropdown" role="button"><i class="fas fa-hotel navicon"></i>Hotel</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <?php
    include "Authentication/login.php";
    ?>