<div class="container-fluid px-0 " id="contact-us">
    <h1 class="pt-3 text-center pb-3">Hayat Mountain Trip</h1>
    <div class="container px-0">
        <div class="row mx-0" id="quick_links">
            <div class="col-6 col-sm-6 col-lg-3 col-md-6 md-mb-5 sm-mb-5">
                <h3 class="mb-3"><i class="fab fa-autoprefixer navicon"></i>Top Topics</h3>
                <ul class="pl-3 mb-0">
                    <a href="introduction">
                        <li class="bottom-icon-text">About Chitral</li>
                    </a>
                    <a href="introduction#how-to-access">
                        <li class="bottom-icon-text">How to Access</li>
                    </a>
                    <a href="shopingmainpage">
                        <li class="bottom-icon-text">Shopping</li>
                    </a>
                </ul>
            </div>
            <div class="col-6 col-lg-3 col-sm-6 col-md-6">
                <h3 class="mb-3"><i class="fab fa-canadian-maple-leaf navicon"></i>Attraction</h3>
                <ul class="pl-3">
                    <a href="tdrculture#uniquechitraliculture">
                        <li class="bottom-icon-text">Unique Culture</li>
                    </a>
                    <a href="introduction#pple-of-chi">
                        <li class="bottom-icon-text">People of Chitral</li>
                    </a>
                    <a href="gallery.php">
                        <li class="bottom-icon-text">Gallery</li>
                    </a>
                </ul>
            </div>
            <div class="col-6 col-lg-3 col-sm-6 col-md-6">
                <h3 class="mb-3 text-white"><i class="fas fa-angle-double-right navicon"></i>Quick Links</h3>
                <ul class="pl-3">
                    <a href="blogs.php">
                        <li class="bottom-icon-text">Blogs</li>
                    </a>
                    <a href="famousplaces#kalash_valley">
                        <li class="bottom-icon-text">Create Your Blogs</li>
                    </a>
                    <a href="aboutus.php">
                        <li class="bottom-icon-text">About Us</li>
                    </a>
                </ul>
            </div>
            <div class="col-6 col-lg-3 col-sm-6 col-md-6 ">
                <h3 class="mb-3 text-white"><i class="fas fa-users navicon"></i>Find Us On</h3>
                <div class="social-link">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-spotify"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <hr class="pt-0 mb-0 mt-2 bg-white mt-0" />
    <p class="text-center py-2 mb-0 copyright-text text-white">Copyright © 2022. Chitral Travel </p>
</div>

<!-- Contact Us -->
<div id="float_contact">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                            <h3 class="py-3 text-dark">Contact Us</h3>
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 d-flex justify-content-end mt-4"
                            id="contact_closebtn"><i class="fas fa-times"></i> </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6"> <a href=""><i
                                    class="fas fa-phone mr-3  contact_icon"></i>+923402599164</a> </div>
                        <div class="col-lg-6"> <a href=""><i
                                    class="fas fa-envelope mr-3 contact_icon"></i>info@gmail.com</a></div>
                    </div>
                    <form class="pr-5" method="post" action="tables/contact_us">
                        <div class="form-group"> <input name="name" type="text" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name">
                            <span
                                class="text-danger"><?php echo (isset($_SESSION["errors"])&&isset($_SESSION["errors"]["name"]))?$_SESSION["errors"]["name"]:""; ?></span>
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter Your Email Address">
                            <span
                                class="text-danger"><?php echo (isset($_SESSION["errors"])&&isset($_SESSION["errors"]["email"]))?$_SESSION["errors"]["email"]:""; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <textarea name="msg" class="form-control" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="Contactusbtn">Submit Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact_btn" id="contact_btn">
    <button data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false"
        aria-controls="collapseWidthExample"><i class="fa fa-envelope"></i></button>
</div>
    <?php include "partials/foot.php"; ?>
</body>

</html>