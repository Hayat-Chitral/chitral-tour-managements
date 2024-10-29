<?php
    include "../../databases/database.php";
    $validation=[
        "name"=>"required",
        "email"=> "required",
        "address"=> "required",
        "blogheading"=> "required",
        "blogdescription"=> "required"];
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
    if(count($validationErrors)>0)
    {
        $_SESSION['errors']=$validationErrors;
        header ("location:../blogs");
    }else{

    $AuthName=$_POST['name'];
    $AuthEmail=$_POST['email'];
    $AuthAddress=$_POST['address'];
    $AuthPhoneno=$_POST['phoneno'];
    $AuthDes=$_POST['descr'];
    $AuthImg=$_FILES['authimg'];
    $BlogHead=$_POST['blogheading'];
    $BlogImg=$_FILES['blogimg'];
    $BlogDes=$_POST['blogdescription'];

    // This is for Author Images
    $FileName=$AuthImg['name'];
    $FileTempName=$AuthImg['tmp_name'];
    $FileDir='../Images/Author_Images/'. $FileName;
    $FileMove=move_uploaded_file($FileTempName,$FileDir);

    // Upload single image
    $BlogFileName=$BlogImg['name'];
    $BlogFileTempName=$BlogImg['tmp_name'];
    $BlogFileDir='../Images/Blog_Images/'. $BlogFileName;
    $BlogFileMove=move_uploaded_file($BlogFileTempName,$BlogFileDir);

    // This is for Blog  multiple Images
    // $count = count($_FILES['blogimg']);
    // for ($i=0; $i < $count; $i++) {
    //     $blogFilename = $_FILES['blogimg']['name'][$i];
    //     $tmp_name = $_FILES['blogimg']['tmp_name'][$i]; 
    //     $FileDir='../Images/Blog_Images/'.$i.'_'.$blogFilename;
    //     $FileMove=move_uploaded_file($tmp_name,$FileDir);
    // }


    $query="INSERT INTO author_blogs (author_name, author_email, author_address, author_ph, author_blurb, author_img, blog_heading, blog_imgs, blog_desc) 
    values ('$AuthName','$AuthEmail','$AuthAddress','$AuthPhoneno','$AuthDes','$FileName','$BlogHead','$BlogFileName','$BlogDes')";
    // mysql_real_escape_string($query);
    $check=mysqli_query( $Connection, $query);
    if ($check) {
        $_SESSION['blogsuccess']="Blog Inserted succefully";
        header('location:../blogs');
        }
        else{
            die("ERROR".mysqli_error($Connection));
        }
    }

?>