<?php 
//  include "../databases/database.php";
 include "header.php";
?>
<h1 class="text-center">Upload Images</h1>
<div class="container">
    <!-- <div class='content'>
        <form action="tables/upload.php" class="dropzone" id="dropzonewidget">
            <button name="submit" class="btn btn-primary">Upload Images</button>
            </form>
        </div> -->
    <form method="POST" enctype="multipart/form-data">

        <h2>Upload Files</h2>
        <!-- name of the input fields are going to
                be used in our php script-->
        <input type="file" name="images[]" multiple>
        <input type="submit" name="submit" class="btn btn-primary" value="Upload Images">
    </form>
</div>
<?php

if(isset($_POST['submit'])) {
    // $AuthImg=$_FILES ['files[]'];
 
    // Configure upload directory and allowed file types
    $upload_dir = 'Images/Uplaoded-Image/'.DIRECTORY_SEPARATOR;
    $allowed_types = array('jpg', 'png', 'jpeg', 'gif');
     
    // Define maxsize for files i.e 2MB
    $maxsize = 2 * 1024 * 1024;
 
    // Checks if user sent an empty form
    if(!empty(array_filter($_FILES['images']['name']))) {
 
        // Loop through each file in files[] array
        foreach ($_FILES['images']['tmp_name'] as $key => $value) 
        {
             
            $file_tmpname = $_FILES['images']['tmp_name'][$key];
            $file_name = $_FILES['images']['name'][$key];
            $file_size = $_FILES['images']['size'][$key];
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
 
            // Set upload file path
            $filepath = $upload_dir.$file_name;
 
            // Check file type is allowed or not
            if(in_array(strtolower($file_ext), $allowed_types)) {
 
                // Verify file size - 2MB max
                if ($file_size > $maxsize)        
                    echo "Error: File size is larger than the allowed limit.";
 
                // If file with name already exist then append time in
                // front of name of the file to avoid overwriting of file
                if(file_exists($filepath)) {
                    $filepath = $upload_dir.time().$file_name;
                     
                    if( move_uploaded_file($file_tmpname, $filepath)) {
                        echo "{$file_name} successfully uploaded <br />";
                    }
                    else {                    
                        echo "Error uploading {$file_name} <br />";
                    }
                }
                else {
                 
                    if( move_uploaded_file($file_tmpname, $filepath)) {
                        echo "{$file_name} successfully uploaded <br />";
                    }
                    else {                    
                        echo "Error uploading {$file_name} <br />";
                    }
                }
            }
            else {
                 
                // If file extension not valid
                echo "Error uploading {$file_name} ";
                echo "({$file_ext} file type is not allowed)<br / >";
            }
            
    $query="INSERT INTO gallery (image) values ('$file_name')";
    // mysql_real_escape_string($query);
    $check=mysqli_query( $Connection, $query);
    if ($check) {
        echo "Images has been uplaod successfully";
        }
        else{
            die("ERROR".mysqli_error($Connection));
        }
    }
        }
    }
?>
<?php 
 include "footer.php";
?>