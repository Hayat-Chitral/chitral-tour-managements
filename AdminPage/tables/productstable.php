<?php
include "../../databases/database.php";
$validation=["itemtitle"=>"required",
"itemprice"=> "required",
"itemcatagory"=> "required"];
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
    $itemTitle=$_POST['itemtitle'];
    $itemCatagoryid=$_POST['itemcatagory'];
    $itemDesc=$_POST['itemdescription'];
    // $itemSpec=$_POST['itemspecification'];
    $itemImage=$_FILES['itemfile'];
    $ItemPrice=$_POST['itemprice'];
    $fileName=$itemImage['name'];
    $FileError=$itemImage['error'];
    $FileTmp=$itemImage['tmp_name'];
    $FileDir='../Images/Shop_Images/Productimages/'.$fileName;
    move_uploaded_file($FileTmp, $FileDir);
  
    $ItemsQuery="INSERT INTO shopingproducts (producttitle,catagoryid,productdescription,prdouctspecification,productprice,productfile)
    values('$itemTitle','$itemCatagoryid', '$itemDesc', '$itemSpec', '$ItemPrice', '$fileName')";
    $check_query=mysqli_query($Connection,$ItemsQuery);
    if ($check_query) {
        $_SESSION['success1']="Data Inserted succefully";
        header ("location:../shoppage");
    }else{
        die (mysqli_error($Connection));
    }
}
?>