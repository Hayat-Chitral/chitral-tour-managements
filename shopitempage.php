<?php 
include "Include/header.php";
?>
<div class="container-fluid ">
    <div class="container mt-3">
        <h3 class="text-dark">Shop Slider</h3>
    </div>
</div>
<hr>

<div class="container px-2">
    <div class="row my-3" id="dresses">
        <?php
        $catagoryId=isset($_GET['productitem'])?$_GET['productitem']:NULL;
        $query="SELECT * FROM  shopingproducts";
        if ($catagoryId) {
            $query.=" WHERE catagoryid=".$catagoryId;
        }
            $shopData=mysqli_query($Connection, $query);
            if (!$shopData) {
                die (mysqli_error($Connection));
            }else{
                while ($row=mysqli_fetch_array($shopData)) {?>
        <div class=" col-12 col-sm-12 col-md-4 myshopclass" data-id="<?php echo  $row['id']; ?>"
            data-image="AdminPage/Images/Shop_Images/Productimages/<?php echo $row['productfile']; ?>"
            data-specification="<?php echo  $row['prdouctspecification']; ?>"
            data-description="<?php echo  $row['productdescription']; ?>" data-title="<?php echo  $row['producttitle']; ?>"
            data-itemprice="<?php echo  $row['productprice']; ?>">
            <div class="card myitemcard mt-3" data-target="#checkoutmodal" data-toggle="modal">
                <div class="imagediv">
                    <?php echo "<img class='img-fluid w-100 item_image_class' src='AdminPage/Images/Shop_Images/Productimages/".$row['productfile']."' >"; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center itemtitle"><?php echo $row['producttitle']; ?></h5>
                    <p class="card-text text-center">Price: $<?php echo $row['productprice']; ?></p>
                </div>
            </div>
        </div>
        <?php   } ?>
        <?php   } ?>
    </div>
</div>
<!-- Modal for Check Out -->
<div class="container-fluid" id="shopdata">
    <div class="modal fade" id="checkoutmodal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="d-flex justify-content-end close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <img class="img-fluid" src="" id="itemimage" alt="">
                            </div>
                            <div class="col-lg-6">
                                <h4 class="text-dark item-title"></h4>
                                <p class="text-dark" id="item-price"></p>
                                <p>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample"
                                        role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Contact us for Check out
                                    </a>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <p class="text-secondary mt-2 text-justify checkoutptag text-dark"><i
                                                class="fa-regular fa-envelope color-dark"></i> : <a
                                                href="mailto: alihayat452@gmail.com">alihayat452@gmail.com</a></p>
                                        <p class="text-secondary mt-2 text-justify checkoutptag text-dark"><i
                                                class="text-dark fa-brands fa-whatsapp"></i> : <a
                                                href="https://wa.me/+923402599164">+92340 2599164</a></p>
                                        <p class="text-secondary mt-2 text-justify checkoutptag text-dark"><i
                                                class="text-dark fa-solid fa-phone"></i> : <a
                                                href="tel: +92309 0054782">+92309 0054782</a></p>
                                        <p class="text-secondary mt-2 text-justify checkoutptag text-dark"><i
                                                class="text-dark fa-brands fa-instagram"></i> : <a
                                                href="https://www.instagram.com/iam.hayat/?hl=en"
                                                target="_blank">하얏알리</a></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Specification</a>
                        </li>
                    </ul>
                    <div class="tab-content w-100" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p class="text-secondary mt-3 text-justify" id="item-desc"></p>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <p class="text-secondary mt-3 text-justify" id="item-spec"></p>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include "Include/footer.php";
?>