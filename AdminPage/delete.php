<?php
 include "../databases/database.php"; 
 if (!isset($_SESSION['is_login'])) {
    header('location:AdminPage/dashboard.php');
}

 function customDelete($pagename,$delete,$tablename,$Connection)
{
    $deleteQuery="DELETE FROM `".$tablename."` WHERE id= ".$delete."";
    $checkQuery=mysqli_query($Connection,$deleteQuery);
    if (!$checkQuery) {
        echo mysqli_error();
    }else{
        header('location:'.$pagename);
    }
}


// Delete User
if (isset($_GET['userdelete'])) {
    $deleteuser=$_GET['userdelete'];
    customDelete('user',$deleteuser,'users',$Connection);
}

// Delete Blogs
if (isset($_GET['blogsdelete'])) {
    $delete=$_GET['blogsdelete'];
    $delete_blogs="DELETE FROM author_blogs WHERE id= ".$delete."";
    customDelete('viewblogs',$delete,'author_blogs',$Connection);
}

// Delete Catagory
if (isset($_GET['deletecategory'])){
    $delete = $_GET['deletecategory']; 
    customDelete('catagory', $delete, 'categories', $Connection);
}

?>