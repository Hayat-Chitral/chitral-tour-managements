<div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header px-2 my-2">
                <?php
                    $user = $_SESSION['user_loggedin'] ?? null;

                    if ($user && isset($user['user_img'], $user['name'])) {
                        echo "<img class='img-fluid w-25 rounded-circle avatar' src='User_Images/" . htmlspecialchars($user['user_img'], ENT_QUOTES, 'UTF-8') . "' >";
                        $userName = $user['name'] ?? '';
                        echo "<span class='mt-5 ml-5'>" . htmlspecialchars(implode(' ', array_slice(str_word_count($userName, 2), 0, 1)), ENT_QUOTES, 'UTF-8') . "</span>";
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
                        <li><a href="add_products.php"><i class="fa fa-circle-dot"></i> Add Products</a></li>
                        <li><a href="view_products.php"><i class="fa fa-circle-dot"></i> View Products</a></li>
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