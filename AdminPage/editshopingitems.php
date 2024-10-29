<?php
 include "header.php";
 if (!isset($_SESSION['is_login'])) {
    header('location:AdminPage/dashboard.php');
}
?>
<div class="col-lg-12 mt-5">
    <form action="tables/editproductstable" class=" p-3 bg-white" method="post" enctype="multipart/form-data">
        <input type="hidden" name="productid" value="<?php echo $_GET['editproduct']; ?>"> 
        <h3 class="text-center">Update Products</h3>
        <?php if(isset($_SESSION['updatedproduct']) && !isset($_SESSION["errors"])):?>
      
        <?php endif; ?>
        <?php
        $productsId = isset($_GET['editproduct']) ? $_GET['editproduct'] : '';  
        $fetchProducts = mysqli_query($Connection, "SELECT * FROM shopingproducts WHERE id='$productsId'");
        if (!$fetchProducts) {
            die($Connection);
        }else{
            $shopingProducts = mysqli_fetch_array($fetchProducts);
    ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Product Title</label>
                    <input type="text" class="form-control" name="itemtitle" id="text"
                        value="<?php echo $shopingProducts['producttitle']; ?>">
                        
                    <span
                        class="text-danger"><?php echo (isset($_SESSION["errors"])&&isset($_SESSION["errors"]["itemtitle"]))?$_SESSION["errors"]["itemtitle"]:""; ?>
                    </span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group ">
                    <label for="exampleFormControlTextarea1">Product Catagory</label>
                    <select class="form-control border border-dark" id="productcatagory" name="itemcatagory">
                        <?php
                            $fetchCatagoryname=mysqli_query($Connection, "SELECT * FROM categories");
                            if (!$fetchCatagoryname) {
                                die ($Connection);
                            }else{
                            
                            while ($row=mysqli_fetch_array($fetchCatagoryname)) { 
                        ?>
                        <option value="<?php echo $row['id']; ?>" <?php echo $shopingProducts['catagoryid']==$row['id']?"selected": ""; ?>> <?php echo $row['catagoryname']; ?></option>
                        <?php } ?>
                        <?php  }  ?>
                    </select>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Product Description</label>
                    <textarea class="form-control" name="itemdescription" id="Description"
                        rows="3"><?php echo $shopingProducts['productdescription']; ?></textarea>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Product Specification</label>
                    <textarea class="form-control" name="itemspecification" id="Specification"
                        rows="3"><?php echo $shopingProducts['prdouctspecification']; ?></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Item Images</label>
                    <img src="<?php echo 'Images/Shop_Images/Productimages/'.$shopingProducts['productfile'];?>"
                        class="img-fluid w-50" onclick="triggerClick()" id="image_placeholder" />
                    <div class="my-4" id="uploaduserimage" placeholder="upload image">
                        <input onchange="DisplayImage(this)" name="edited_image" class="form-control" type="file"
                            id="formFile" style="display:none;">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Price</label>
                    <input type="text" class="form-control" name="itemprice" id="text"
                        value="<?php echo $shopingProducts['productprice'];?>">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-end">
                <button name="addproducts" type="submit" class="btn btn-primary w-sm-100 w-md-50">Update
                    Product</button>
            </div>
        </div>
    </form>
</div>
<?php
include "includes/scripts.php";
?>
<?php
 }
 unset($_SESSION['updatedproduct']);
 unset($_SESSION['errors']);
include "footer.php";
?>