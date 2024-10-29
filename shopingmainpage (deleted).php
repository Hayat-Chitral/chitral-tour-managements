<?php 
include "Include/header.php";
// include "databases/database.php";
?>
<div class="container-fluid shopbanner">
    <div class="shopingtext p-3 mr-3">
        <h1 class="text-center">Shoping</h1>
        <p><span style="font-weight:900;">SAY WOW!</span><br />
            Amazing items that will leave you without words
        </p>
    </div>
</div>
<div class="container-fluid px-3 bg-dark py-1">
    <div class="container shopcontainer">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                <div class="row" id="shoping-id">
                    <div class="col-lg-3 col-md-3 col-3 col-sm-3 py-2"><i class="fas fa-truck shopicon"></i></div>
                    <div class="col-lg-9 col-3 col-sm-3 col-md-3">
                        <p class="mb-0 pr-0 py-2">Free Shipping<br /><span style="color:rgba(139, 145, 152, 1);">
                                Free delivery over $100
                            </span></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                <div class="row" id="shoping-id">
                    <div class="col-lg-3 col-md-3 col-3 col-sm-3 py-2"><i class="fas fa-undo-alt shopicon"></i></div>
                    <div class="col-lg-9 col-3 col-sm-3 col-md-3">
                        <p class="mb-0 pr-0 py-2">Free Returns<br /><span style="color:rgba(139, 145, 152, 1);">
                                Hassle free returns
                            </span></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                <div class="row" id="shoping-id">
                    <div class="col-lg-3 col-md-3 col-3 col-sm-3 py-2"> <i class="fas fa-shield-alt shopicon"></i>
                    </div>
                    <div class="col-lg-9 col-3 col-sm-3 col-md-3">
                        <p class="mb-0 pr-0 py-2">Secure Shoping<br /><span style="color:rgba(139, 145, 152, 1);">
                                Best security features
                            </span></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                <div class="row" id="shoping-id">
                    <div class="col-lg-3 col-md-3 col-3 col-sm-3 py-2"><i class="fas fa-th shopicon"></i></i></div>
                    <div class="col-lg-9 col-3 col-sm-3 col-md-3">
                        <p class="mb-0 pr-0 py-2">Secure Shoping<br /><span style="color:rgba(139, 145, 152, 1);">
                                Best security features
                            </span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-3">
    <div class="container mt-3 whybuyfromus">
        <h1 class="text-black text-center">Why buy from us?</h1>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <p class="text-center ">Journal has been the best selling and most loved Opencart theme since first
                    launch in
                    2013. Tried and tested
                    by over 20K people, Journal is the best Opencart theme framework on the market today.</p>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <div class="row">
        <?php
        $fetchcatagoryData=mysqli_query($Connection, "SELECT * FROM categories ORDER BY catagoryid ASC");
        if (!$fetchcatagoryData) 
        {
            die (mysqli_error($Connection));  
        }else
        {
            while ($row=mysqli_fetch_array($fetchcatagoryData)) { ?>
            
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                <a href="shopitempage.php">
                    <div class="img-div card">
                        <?php echo "<img class='img-fluid' src='AdminPage/Images/Shop_Images/CatagoryImages".$row['catagoryfile']."' >"; ?>
                    </div>
                    <div class="caption d-flex justify-content-center">
                        <a href="shopitempage.php">Fashion</a>
                    </div>
                </a>
            </div>
        

        <?php }; ?>
        <?php }; ?>
        </div>




        <div class=" my-3" id="topcategories_1">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                    <a href="shopitempage.php">
                        <div class="img-div card">
                            <img class="card-img-top fluid-img"
                                src="Images/shoping/shoping-front-page-products/clothing (1).jpg" alt="Card image cap"
                                href="shopitempage.php">
                        </div>
                        <div class="caption d-flex justify-content-center">
                            <a href="shopitempage.php">Fashion</a>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                    <div class="img-div card">
                        <img class="card-img-top" src="Images/shoping/shoping-front-page-products/health-beauty (1).jpg"
                            alt="Card image cap">
                    </div>
                    <div class="caption d-flex justify-content-center">
                        <a href="">Health & Beauty</a>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                    <div class="img-div card">
                        <img class="card-img-top" src="Images/shoping/shoping-front-page-products/electronics (5).jpg"
                            alt="Card image cap">
                    </div>
                    <div class="caption d-flex justify-content-center">
                        <a href="">Electronics</a>
                    </div>
                </div>
            </div>
            <div class="row">
            
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                    <div class="img-div card">
                        <img class="card-img-top" src="Images/shoping/shoping-front-page-products/stationery_front.jpg"
                            alt="Card image cap">
                    </div>
                    <div class="caption d-flex justify-content-center">
                        <a href="">Stationery</a>
                    </div>
                </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                    <div class="img-div card d-flex justify-content-center">
                        <img class="card-img-top" src="Images/shoping/shoping-front-page-products/home-decor (1).jpg"
                            alt="Card image cap">
                    </div>
                    <div class="caption d-flex justify-content-center">
                        <a href="">Household Care</a>
                    </div>
                </div>


                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                    <div class="img-div card" data-toggle="modal" data-target="#topcategoriesitem_1">
                        <img class="card-img-top" src="Images/shoping/shoping-front-page-products/furniture.jpg"
                            alt="Card image cap">
                    </div>
                    <div class="caption d-flex justify-content-center">
                        <a href="">Furniture</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid px-3">
    <div class="container mt-3">
        <h1 class="text-black text-center">Featured Products</h1>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <p class="text-justify ">Display any products as tabs or accordions with optional grid or carousel mode.
                    Custom products per row per module and per breakpoint. Each module can display products in either
                    grid or list view with different styles per module.</p>
            </div>
            <div class="col-lg-3"></div>
        </div>

        <div class="owl-carousel owl-theme myowlslider2">
            <div class="item card">
                <img src="Images/shoping/feature product/feature-product (1).jpg" class=" card-img-top" alt="">
            </div>
            <div class="item card">
                <img src="Images/shoping/feature product/feature-product (2).jpg" class=" card-img-top" alt="">
            </div>
            <div class="item card">
                <img src="Images/shoping/feature product/feature-product (3).jpg" class=" card-img-top" alt="">
            </div>
            <div class="item card">
                <img src="Images/shoping/feature product/feature-product (4).jpg" class=" card-img-top" alt="">
            </div>
            <div class="item card">
                <img src="Images/shoping/feature product/feature-product (5).jpg" class=" card-img-top" alt="">
            </div>
            <div class="item card">
                <img src="Images/shoping/feature product/feature-product (6).jpg" class=" card-img-top" alt="">
            </div>
            <div class="item card">
                <img src="Images/shoping/feature product/feature-product (7).jpg" class=" card-img-top" alt="">
            </div>
        </div>

    </div>
</div>
<div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>


        <?php 
include "Include/footer.php";
?>