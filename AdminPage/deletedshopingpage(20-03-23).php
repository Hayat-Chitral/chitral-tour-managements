<?php
// include "../databases/database.php";
include "header.php";
?>
<div class="container-fluid">
    <div class="container mt-5">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#catagorymodal">Add Catagory</button>
        <div class="modal fade" id="catagorymodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="catagorymodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Catagory</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="text" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="catatitle" id="text"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Add Image</label>
                                    <input class="form-control" type="file" id="formFile" name="cataimage">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="AddCatagory">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
        if (isset($_POST['AddCatagory'])) {
            $CatagoryTitle=$_POST['catatitle'];
            $CatagoryImage=$_FILES['cataimage']; 
            $CatagoryImageName=$CatagoryImage['name'];
            $CatagoryImageError=$CatagoryImage['error'];
            $CatagoryImageTmp=$CatagoryImage['tmp_name'];
            $CatagoryImageDir='images/Shop_Images/'.$CatagoryImageName;
            move_uploaded_file($CatagoryImageTmp, $CatagoryImageDir);

            $CatagoryQuery="INSERT INTO itemscatagory (catagorytitle, catagoryimg) values ('$CatagoryTitle', '$CatagoryImageName')";
            $CheckQuery=mysqli_query($Connection, $CatagoryQuery);
            if (!$CheckQuery) {
                echo mysqli_error();
            }else{
                echo "Data Entered Successfully";
            }
        }
        ?>


        <div class="row mt-5">
            <?php 
            $FetchData=mysqli_query($Connection, "SELECT * FROM itemscatagory");
            if (!$FetchData) {
                echo mysqli_error();
            }else{
                while ($CatagoryRow=mysqli_fetch_array($FetchData)) { ?>
            <div class="col-6 mt-3">
                <div class="card">
                    <?php echo "<img class='img-fluid catagory_image_class' src='images/Shop_Images/".$CatagoryRow['catagoryimg']."' >"; ?>
                    <div class="card-body">
                        <h5 class="card-title catagory_title"><?php echo $CatagoryRow['catagorytitle']; ?> </h5>
                        <div class="row">
                            <div class="col-lg-4">
                                <a class="btn-info btn btn-danger"
                                    href="delete.php?catagorydelete=<?php echo $CatagoryRow['id']; ?>">Delete</a>
                            </div>
                            <div class="col-lg-4">
                                <a href="" data-catimage="<?php echo $CatagoryRow['catagoryimg'];?>"
                                    class="btn-info btn btn-success updatecatagorybtn" data-bs-toggle="modal"
                                    data-bs-target="#updatecatagorymodal"
                                    data-title="<?php echo $CatagoryRow['catagorytitle']; ?>">Update</a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#" class="btn btn-primary add_shop_item" data-bs-toggle="modal"
                                    data-bs-target="#itemsmodal"
                                    data-title="<?php echo $CatagoryRow['catagorytitle']; ?>">Add Items
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }; ?>
            <?php }; ?>
        </div>

        <!-- Modal for Shoping Items -->
        <div class="modal fade" id="itemsmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="itemsmodal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="shopitemtitle"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class=" p-3" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="itemtitle" id="text"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text" class="form-label">Price</label>
                                        <input type="text" class="form-control" name="itemprice" id="text"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Description</label>
                                        <textarea class="form-control" name="itemdescription" id="Description"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Specification</label>
                                        <textarea class="form-control" name="itemspecification" id="Specification"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Item Image</label>
                                        <input name="itemfile" class="form-control" type="file" id="formFile" multiple>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button name="AddItems" type="submit" class="btn btn-primary w-25">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <?php
if (isset($_POST['AddItems'])) {
    $ItemTitle=$_POST['itemtitle'];
    $ItemPrice=$_POST['itemprice'];
    $ShopDes=$_POST['itemdescription'];
    $ShopSpec=$_POST['itemspecification'];
    $ShopImage=$_FILES['itemfile'];
    $FileName=$ShopImage['name'];
    $FileError=$ShopImage['error'];
    $FileTmp=$ShopImage['tmp_name'];
    $FileDir='images/Shop_Images/Items/'.$FileName;
    move_uploaded_file($FileTmp, $FileDir);
  
  
    $ItemsQuery="INSERT INTO fashionitems (item_title,item_price,item_description,item_specification,item_image)values('$ItemTitle','$ItemPrice','$ShopDes','$ShopSpec','$FileName')";
    $check_query=mysqli_query($Connection,$ItemsQuery);
    if ($check_query==false) {
        echo mysqli_error();
    }else{
        echo "Data Successfully Entered";
    }
}
?>

        <!-- Update Catagory Modal -->
        <?php
if (isset($_POST['update_catagory'])) {
    $UpdateCatagory=$_GET['id'];
    $updatetitle=$_POST['updatecattitle'];
    $updateimage=$_FILES['updatecatimage'];
    $Updatedfilename=$updateimage['name'];
    $UpdatedFileError=$updateimage['error'];
    $UpdatedFileTmp=$updateimage['tmp_name'];
    $UpdatedFileDir='images/Shop_Images/Items/'.$Updatedfilename;
    move_uploaded_file($FileTmp, $FileDir);
    $UpdateQuery="UPDATE productcatagory SET catagorytitle='$updatetitle', catagoryimg='$Updatedfilename' WHERE id=$UpdateCatagory";
    $CheckUpdatedQuery=mysqli_query($Connection,$UpdateQuery);
    if (!$CheckUpdatedQuery) {
        echo mysqli_error();
    }else{
        header('Location:shoppage.php');
    }
}
?>

        <div class="modal fade" id="updatecatagorymodal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="updatecatagoryLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updatecatagory"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="text" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="updatecattitle" id="updatecattitle"
                                        aria-describedby="emailHelp" value="">
                                </div>
                            </div>

                            <div class="row mt-3 d-flex justify-content-center">
                                <div class="col-lg-6 col-md-6 col-12 col-sm-12 d-flex justify-content-center">
                                    <img src="" class="img-fluid imgplaceholder updatecatagoryimage"
                                        id="catagoryimage" />
                                    <div class="my-4" id="uploaduserimage" placeholder="upload image">
                                        <input name="edited_image" class="form-control" type="file" id="getid"
                                            style="display:none;">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="update_catagory">Update
                                    Catagory</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include "footer.php";
    ?>