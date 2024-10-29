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
}else{
    $procutctsId=$_POST['productid'];
    $updateProducttitle=$_POST['itemtitle'];
    $updateProcutcatagory=$_POST['itemcatagory'];
    $updateProdcuctDesc=$_POST['itemdescription'];
    $updateProductspec=$_POST['itemspecification'];
    $updateProductfile=$_FILES['edited_image'];
    $updateProcutprice=$_POST['itemprice'];
    $updateProductname=$updateProductfile['name'];
    $FileError=$updateProductfile['error'];
    $FileTmp=$updateProductfile['tmp_name'];
    $FileDir='../Images/Shop_Images/Productimages/'.$updateProductname;
    move_uploaded_file($FileTmp, $FileDir);
    $updateProcucts="UPDATE shopingproducts SET producttitle='$updateProducttitle',catagoryid='$updateProcutcatagory',productdescription='$updateProdcuctDesc',
    prdouctspecification='$updateProductspec', productprice='$updateProcutprice', productfile='$updateProductname' WHERE id=$procutctsId";
    $checkProducts=mysqli_query($Connection,$updateProcucts);
    if ($checkProducts) {
        $_SESSION['updatedproduct']="Data Updated succefully";
        header ("location:../viewproducts.php");
    }else{
        die (mysqli_error($Connection));
    }
}
?>