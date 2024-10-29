<?php
// session_start();
include "../databases/database.php";
if (!isset($_SESSION['is_login'])) {
    header('location:../login.php');
}
ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en" class="theme-light">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Jquery  -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Chart -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script> -->

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- DropZone -->
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../fontawsm/css/all.css">

    <!-- Style .css -->
    <link rel="stylesheet" href="dashboard.css">

    <!-- <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" /> -->


    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <title>Dashbooard</title>
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
        <div class="sidebar-header px-2 my-2">
                <?php
                    // Ensure the session variable is set and not null
                    $user = $_SESSION['user_loggedin'] ?? null;

                    // Check if $user is an array and has the necessary keys
                    if ($user && isset($user['user_img'], $user['user_name'])) {
                        // Display the user's image
                        echo "<img class='img-fluid w-25 rounded-circle avatar' src='User_Images/" . htmlspecialchars($user['user_img'], ENT_QUOTES, 'UTF-8') . "' >";

                        // Display the first word of the user's name safely
                        $userName = $user['user_name'] ?? '';
                        echo "<span class='mt-2'>" . htmlspecialchars(implode(' ', array_slice(str_word_count($userName, 2), 0, 1)), ENT_QUOTES, 'UTF-8') . "</span>";
                    } else {
                        echo "User information not available.";
                    }
                ?>
        </div>

            <hr class="mt-0">
            <ul>
                <li
                    class="dashboard_animation <?php echo (strpos($_SERVER['REQUEST_URI'],"dashboard")!==false)?"active":"" ?>">
                    <a href="dashboard"><i class="fas fa-home icofont"></i> Dashboard</a>
                </li>
                <li class="dashboard_animation"><a href=""><i class="fas fa-database icofont"></i>Database</a></li>
                <li
                    class="dashboard_animation <?php echo (strpos($_SERVER['REQUEST_URI'],"touristbooked")!==false)?"active":"" ?>">
                    <a href="touristbooked.php"><i class="fas fa-luggage-cart icofont"></i>Bookings</a>
                </li>
                <li
                    class="dashboard_animation <?php echo (strpos($_SERVER['REQUEST_URI'],"user")!==false)?"active":"" ?>">
                    <a href="user.php"><i class="fa-solid fa-user icofont"></i>Users</a>
                </li>
                <li class="dashboard_animation">
                    <a href="#" id="blogs_icon"><i class="fas fa-feather icofont"></i>Blogs <span
                            class="fas fa-chevron-right arrow-icon" id="pages-sm-icon2"></span></a>
                    <ul id="dropdown_blogs">
                        <li><a href="blogs.php"><i class="fa fa-circle-dot"></i> Add Blogs</a></li>
                        <li><a href="viewblogs.php"><i class="fa fa-circle-dot"></i> Show Blogs</a></li>
                    </ul>
                </li>
                <li class="dashboard_animation">
                    <a href="#" id="shoping_icon"><i class="fab fa-shopify icofont"></i>Ecommerce <span
                            class="fas fa-chevron-right arrow-icon" id="pages-sm-icon1"></span></a>
                    <ul id="dropdown_catagory">
                        <li><a href="shoppage.php"><i class="fa fa-circle-dot"></i> Add Products</a></li>
                        <li><a href="viewproducts.php"><i class="fa fa-circle-dot"></i> View Products</a></li>
                        <li><a href="catagory.php"><i class="fa fa-circle-dot"></i> View Catagory</a></li>
                    </ul>
                </li>
                <li
                    class="dashboard_animation <?php echo (strpos($_SERVER['REQUEST_URI'],"galley")!==false)?"active":"" ?>">
                    <a href="gallery.php"><i class="fa-solid fa-user icofont"></i>Gallery</a>
                </li>

                <!-- <li
                    class="dashboard_animation <?php echo (strpos($_SERVER['REQUEST_URI'],"gallery")!==false)?"active":"" ?>">
                    <a href="gallery.php"><i class="fas fa-photo-video icofont"></i>Gallery</a>
                </li> -->
                <li class="dashboard_animation"><a href="abouttt"><span><i class="fas fa-info-circle icofont"></i>About
                            HMT</a></li>
            </ul>
        </nav>
        <div class="content px-0 pt-0">
            <nav class="navbar navbar-expand-lg navbar-light px-0 py-0 top-navbar d-flex justify-content-end">
                <div class="collapsebtn " id="sidebarCollapse">
                    <span class="fas fa-bars"></span>
                </div>
                <div id="app" class="mr-3">
                    <nav class="pb-0 navbar navbar-expand-md navbar-light shadow-sm">
                        <div class="container logoutbtn">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-users-cog"></i> Account
                                </button>
                                <div class="adminlogout dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href=""><i class="fa-solid fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="../logout.php"><i
                                            class="fa-solid fa-right-from-bracket"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </nav>