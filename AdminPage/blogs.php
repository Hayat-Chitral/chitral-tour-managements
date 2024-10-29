<?php
include "header.php";
?>
<!-- SummerNote -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<div class="container-fluid">
    <div class="tile">
        <h4 class="pl-3">Add blogs</h4>
        <?php if(isset($_SESSION['blogsuccess']) && !isset($_SESSION["errors"])):?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> <?php echo $_SESSION['blogsuccess'];?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>
        <form class="pl-3" action="tables/blogstable" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="AuthorName">Author Name</label>
                                <input name="name" type="text" class="form-control">
                                <span
                                    class="text-danger"><?php echo (isset($_SESSION["errors"])&&isset($_SESSION["errors"]["name"]))?$_SESSION["errors"]["name"]:""; ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="Email">Author Email</label>
                                <input name="email" type="text" class="form-control">
                                <span
                                    class="text-danger"><?php echo (isset($_SESSION["errors"])&&isset($_SESSION["errors"]["email"]))?$_SESSION["errors"]["email"]:""; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="Address">Author Address</label>
                                <input name="address" type="text" class="form-control">
                                <span
                                    class="text-danger"><?php echo (isset($_SESSION["errors"])&&isset($_SESSION["errors"]["address"]))?$_SESSION["errors"]["address"]:""; ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="Phone Number">Author Phone No (Optional)</label>
                                <input name="phoneno" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="authorblurb">Author Blurb (Optional)</label>
                                <textarea name="descr" class="form-control" id="authorblurb" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="Images/inplaceimg.jpg" class="img-fluid imgplaceholder" onclick="triggerClick()"
                        id="image_placeholder" />
                    <div class="my-4" id="uploaduserimage" placeholder="upload image">
                        <input onchange="DisplayImage(this)" name="authimg" class="form-control" type="file"
                            id="formFile" style="display:none;">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="AuthorName">Heading</label>
                        <input name="blogheading" type="text" class="form-control">
                        <span
                            class="text-danger"><?php echo (isset($_SESSION["errors"])&&isset($_SESSION["errors"]["blogheading"]))?$_SESSION["errors"]["blogheading"]:""; ?>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="blogfile">Add Feature Image</label>
                        <input type="file" name="blogimg" id="blogfile" class="form-control" multiple>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="blogdes">Description</label>
                        <textarea name="blogdescription" id="summernote" cols="30" rows="10"></textarea>
                        <span
                            class="text-danger"><?php echo (isset($_SESSION["errors"])&&isset($_SESSION["errors"]["blogdescription"]))?$_SESSION["errors"]["blogdescription"]:""; ?>
                        </span>
                    </div>
                </div>

                <div class="col-lg-12 d-flex justify-content-end w-100">
                    <button name="" type="submit" class="text-white btn" style="background-color:#0091d5;">Upload Your
                        Blog</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
include "includes/scripts.php";
?>
<!-- SummerNote -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$(document).ready(function() {
    $('#summernote').summernote({
        placeholder: 'Add Blog Description',
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
unset($_SESSION['errors']);
unset($_SESSION['blogsuccess']);
?>