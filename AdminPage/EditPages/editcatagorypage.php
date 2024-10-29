<?php
include "../header.php";
?><form action="tables/catagorytable" class=" p-3 bg-white" method="post" enctype="multipart/form-data">
    <input type="hidden" name="catagoryidname" value="<?php echo $_GET['catagoryid']; ?>">
    <h3 class="text-center">Update Catagory</h3>
    <?php if(isset($_SESSION['success']) && !isset($_SESSION["errors"])):?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> <?php echo $_SESSION['success'];?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>

    <?php
        $CatagoryId = isset($_GET['catagoryid']) ? $_GET['catagoryid'] : '';  
        $fetchcatagory = mysqli_query($Connection, "SELECT * FROM categories WHERE id='$CatagoryId'");
        if (!$fetchcatagory) {
            die($Connection);
        }else{
            $Catagory = mysqli_fetch_array($fetchcatagory);
    ?>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Catagory Name</label>
                <input type="text" class="form-control" name="catagname" id="text" value="<?php echo $Catagory['catagoryname']; ?>">
                <span
                    class="text-danger"><?php echo (isset($_SESSION["errors"])&&isset($_SESSION["errors"]["catagname"]))?$_SESSION["errors"]["catagname"]:""; ?>
                </span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Catagory Images</label>
                <input name="catagoryfile" class="form-control" type="file" id="formFile" multiple>
            </div>
        </div>
        <div class="row w-100">
            <div class="px-0 col-lg-12 d-flex justify-content-end">
                <button name="addcatagory" type="submit" class="btn btn-primary">Add Catagory</button>
            </div>
        </div>
    </div>
</form>
<?php
        }
include "../footer.php";
?>