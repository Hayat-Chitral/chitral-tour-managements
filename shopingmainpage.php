<?php 
include "Include/header.php";
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
    <div class="container px-0 shopcontainer">
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
    <div class="container px-0 mt-3 whybuyfromus">
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
        <div class="row mb-2">
        <?php
        $fetchcatagoryData=mysqli_query($Connection, "SELECT * FROM  categories");
        if (!$fetchcatagoryData) 
        {
            die (mysqli_error($Connection));
        }else
        {
            while ($row=mysqli_fetch_array($fetchcatagoryData)) { ?>
            
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                <a href="shopitempage.php?productitem=<?php echo $row['id']; ?>">
                    <div class="img-div card">
                        <?php echo "<img class='img-fluid' src='AdminPage/Images/Shop_Images/CatagoryImages/".$row['catagoryfile']."' >"; ?>
                    </div>
                    <div class="caption d-flex justify-content-center">
                        <a href="shopitempage.php?productitem=<?php echo $row['id']; ?>"><?php echo $row['catagoryname'];?></a>
                    </div>
                </a>
            </div>
        <?php }; ?>
        <?php }; ?>
        </div>
        </div>
    </div>
</div>



<?php 
include "Include/footer.php";
?>