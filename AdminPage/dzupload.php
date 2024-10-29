<?php 
include '../databases/database.php';
// var_dump($_FILES);
// exit;
if(!empty($_FILES))
{      
    // File path configuration 
    $uploadDir = "DropZone/"; 
    $fileName = basename($_FILES['file']['name']); 
    $uploadFilePath = $uploadDir.$fileName; 
     
    // Upload file to server 
    if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath))
    { 
        // Insert file information in the database 
        $query="INSERT INTO gallery (image) values ('$fileName')";
         if (mysqli_query($Connection, $query)) 
        {
             echo "Images has been uplaoded successfully";
        }
        else
        {
            die("ERROR".mysqli_error($Connection));
        }
    } 
} 






// if ($_FILES['file']['name'] !=""){
//         $fileNames=''; //This variable is use to store the name of files that a user uploaded
//         // $count=($_FILES['file']['name']);
//         // $fileCount=count($count);
//         // for ($i=0; $i < $fileCount; $fileCount++) 
//         // { 
//         //     $file_name = $_FILES['file']['name'][$i]; //use to save a single file name
//         //     $extensions= pathinfo($file_name, PATHINFO_EXTENSION);
//         //     $validExtensions= array('png', 'jpg', 'jpeg');
//         //     if (in_array($extensions, $validExtensions)) 
//         //     {
//         //         $newName=rand(). " . ". $extensions;
//         //         $path="DropZone/" . $newName;
//         //         move_uploaded_file($_FILES['file']['tmp_name'][$i], $path);
//         //         $fileNames .=$newName. " , " ;
//         //     }else
//         //     {
//         //         echo "False";
//         //     } 
//         // }
//         $query="INSERT INTO dropzonetable (filenameondb) values ('$fileNames')";
//         if ($mysqli_query($Connection, $query)) 
//         {
//             echo "Images has been uplaoded successfully";
//         }
//         else
//         {
//             die("ERROR".mysqli_error($Connection));
//         }
//     }
// ?>