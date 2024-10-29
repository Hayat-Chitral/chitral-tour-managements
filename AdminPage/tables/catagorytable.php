<?php
include "../../databases/database.php";
$validation=[
// "catagpid"=> "required",
"catagname"=> "required",
"catagoryfile"=> "required"];
$validationErrors=[];
foreach($_POST as $key=>$field)
{
    if(in_array($key,array_keys($validation)))
    {
        if($validation[$key]=="required" && empty($_POST[$key]))
        {
            $validationErrors[$key] = $key." is required";
        }
    }
}
if(count($validationErrors)>0){
    $_SESSION['errors']=$validationErrors;
    header ("location:../shoppage");
}else{
        $catagoryName=$_POST['catagname'];
        // $catagoryId=$_POST['catagid'];
        $catagoryImage=$_FILES['catagoryfile']; 
        $CatagoryImageName=$catagoryImage['name'];
        $CatagoryImageError=$catagoryImage['error'];
        $CatagoryImageTmp=$catagoryImage['tmp_name'];
        $CatagoryImageDir='../Images/Shop_Images/CatagoryImages/'.$CatagoryImageName;
        move_uploaded_file($CatagoryImageTmp, $CatagoryImageDir);
    
        $CatagoryQuery="INSERT INTO  categories (catagoryname, catagoryfile)
        values ('$catagoryName', '$CatagoryImageName')";
        $CheckQuery=mysqli_query($Connection, $CatagoryQuery);
        if ($CheckQuery) {
            $_SESSION['success']="Catagory Inserted succefully";
            header('location:../shoppage');
        }else{
            echo (mysqli_error($Connection));
        }
    }
?>