<?php
// include "../databases/database.php";
if (isset($_POST['updateuser'])) 
{
    // $update=$_POST['edituser'];
    $userfirstname=$_POST['user_firstname'];
    $useremail=$_POST['user_email'];
    $userphoneno=$_POST['user_ph'];
    $userdateofbirth=$_POST['user_dob'];
    $usergender=isset($_POST['user_gender'])?$_POST['user_gender']:"";
    $UserRole=isset($_POST['assign_role'])?$_POST['assign_role']:"";
    $useraddress=$_POST['user_address'];
    $usercountry=$_POST['user_country'];
    $usercity=$_POST['user_city'];
    $userimage=$_FILES['edited_image'];
    $userpassword=$_POST['user_password'];
    
    $File_Name=$userimage['name'];
    $File_TempName=$userimage['tmp_name'];
    $File_Dir="User_Images/" . $File_Name;
    $myphoto = move_uploaded_file($File_TempName, $File_Dir);
    
    $update_data="UPDATE users SET name='$userfirstname', email='$useremail', phone='$userphoneno', usergender='$usergender',
         dob='$userdateofbirth', assignrole='$UserRole', address='$useraddress', country='$usercountry', city='$usercity',
          password='$userpassword', profile='$File_Name' WHERE id=$update";
        $check_data=mysqli_query($Connection, $update_data);
        if(!$check_data)
        {
            echo mysqli_error();
        }else
        {
            header('../location:user.php');
        }
    }
    ?>