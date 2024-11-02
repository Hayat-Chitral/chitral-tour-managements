<?php
include "includes/header.php";
include "includes/sidebar.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<div class="container">
    <div class="content image_upload_div">
        <form class="dropzone" enctype="multipart/form-data">
            <div class="dz-message">
                Drop files here or click to upload.
            </div>
        </form>
        <button class="btn btn-info" id="startUpload">UPLOAD</button>
    </div>

    <!-- 
    <div class='content'>
        <form action="dzupload.php" class="dropzone" id="imgdropzone">

        </form>
        <button type="submit" name="mybtn" id="upload_button" class="btn btn-info">Upload</button>
    </div>
</div> -->


    <!-- <script>
Dropzone.options.myDropzone = {
    autoProcessQueue: false, //This stops auto processing
    acceptedFiles: ".png,.jpg", //Change it according to your requirement.
    init: function() {
        var submit = document.querySelector('#upload_button');
        mydropzone = this;
        submit.addEventListener("click", function() {
            mydropzone.processQueue();
        });
        this.on("success", function(file, response) {
            alert('HELLO');
        });
    },
};
</script> -->





    <!-- <script>
    // Initialize Dropzone
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#imgdropzone", {
        url: "dzupload.php",
        parallelUploads: 2,
        uploadMultiple: true,
        acceptedFiles: '.png, .jpg, .jpeg',
        autoProcessQueue: false
    });

    // Add a click event handler to a button to manually trigger uploads
    $('#upload_button').click(function() {
        myDropzone.processQueue();
    });
    </script> -->


<script>
        Dropzone.autoDiscover = false;
    $(function() {
        //Dropzone class
        var myDropzone = new Dropzone(".dropzone", {
            url: "dzupload",
            paramName: "file",
            maxFilesize: 10,
            maxFiles: 10,
            acceptedFiles: '.png, .jpg, .jpeg',
            autoProcessQueue: false
        });

        $('#startUpload').click(function() {
            myDropzone.processQueue();
        });
    });
    </script>
<?php
    include "includes/footer.php";
?>