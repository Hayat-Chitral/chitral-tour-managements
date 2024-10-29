<?php
// include "../databases/database.php";
include "header.php";
?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<div class="container-fluid">
    <div class="tile">
        <div class="row">
            <div class="col-lg-4 mt-2">
                <!-- Catagory Form -->
                <form action="tables/catagorytable" class=" p-3 bg-white" method="post" enctype="multipart/form-data">
                    <h4>Add Catagory</h4>
                    <?php if(isset($_SESSION['success']) && !isset($_SESSION["errors"])):?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> <?php echo $_SESSION['success'];?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Catagory Name</label>
                                <input type="text" class="form-control" name="catagname" id="text">
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
            </div>
            <!-- Products Form -->
            <div class="col-lg-8 mt-2">
                <form action="tables/productstable" class=" p-3 bg-white" method="post" enctype="multipart/form-data">
                    <h4 class="">Add Products</h4>
                    <?php if(isset($_SESSION['success1']) && !isset($_SESSION["errors"])):?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> <?php echo $_SESSION['success1'];?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Product Name</label>
                                <input type="text" class="form-control" name="itemtitle" id="text">
                                <span
                                    class="text-danger"><?php echo (isset($_SESSION["errors"])&&isset($_SESSION["errors"]["itemtitle"]))?$_SESSION["errors"]["itemtitle"]:""; ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="exampleFormControlTextarea1">Product Catagory</label>
                                <select class="form-control border border-dark" id="productcatagory"
                                    name="itemcatagory">
                                    <option value="">Select Category</option>
                                    <?php
                                        $fetchCatagory=mysqli_query($Connection, "SELECT * FROM  categories");
                                        while ($row=mysqli_fetch_array($fetchCatagory)) { ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['catagoryname']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="blogdescription" id="summernote1" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>



                    <!-- Excel Sheet Test -->
                    <h5>Add Excel Sheet of your products</h5>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="file" name="" id="">
                            </div>
                        </div>
                    </div>





                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Item Images</label>
                                <input name="itemfile" class="form-control" type="file" id="formFile" multiple>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Price</label>
                                <input type="text" class="form-control" name="itemprice" id="text">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <button name="addproducts" type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include "includes/scripts.php";
?>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$(document).ready(function() {
    $('#summernote1').summernote({
        name: 'itemdescription',
        placeholder: 'Product Description',
        tabsize: 2,
        height: 100,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
});
</script>
<?php
include "footer.php";
// include "includes/scripts.php";
unset($_SESSION['errors']);
unset($_SESSION['success']);
unset($_SESSION['success1']);
?>