
    <?php
    include "../../databases/database.php";
    $validation=[
        "user_firstname"=>"required",
        "user_email"=> "required",
        "user_password"=> "required",
        "assign_role"=> "required"];
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
            header ("location:../adduser");
        }else{

        $userfirstname = $_POST['user_firstname'];
        $useremail = $_POST['user_email'];
        $userphoneno = $_POST['user_ph'];
        $usercity = $_POST['user_city'];
        $userpassword = $_POST['user_password'];
        $userdateofbirth = $_POST['user_dob'];
        $usercountry = $_POST['user_country'];
        $useraddress = $_POST['user_address'];
        $usergender = isset($_POST['user_gender']) ? $_POST['user_gender'] : "";
        $UserRole = $_POST['assign_role'];
        $userimage = $_FILES['image'];
        $File_Name = $userimage['name'];
        $File_TempName = $userimage['tmp_name'];
        $File_Dir = "../User_Images/" . $File_Name;
        $myphoto = move_uploaded_file($File_TempName, $File_Dir); 
   
        echo $query = "INSERT INTO users (name, email, phone, dob, usergender, assignrole, address, country, city, password, profile)
        value ('$userfirstname','$useremail','$userphoneno','$userdateofbirth','$usergender','$UserRole','$useraddress','$usercountry',
        '$usercity','$userpassword','$File_Name')";
       $check = mysqli_query($Connection, $query);
        if ($check) 
        {
            $_SESSION['success']="Data Inserted succefully";
            header ("location:../adduser");

        } else 
        {
            die (mysqli_error($Connection));
        }
    }
    ?>