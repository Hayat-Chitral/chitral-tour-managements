<?php
// session_start();
    include "../databases/database.php";
    $validation=["Name"=>"required",
    "Email"=> "required",
    "Phone_No"=> "required",
    "City"=> "required"];
    $validationErrors=[];
    foreach($_POST as $key=>$field){
        if(in_array($key,array_keys($validation)))
        {
            if($validation[$key]=="required" && empty($_POST[$key])){
                $validationErrors[$key] = $key." is required";
            }
        }
    }
    if(count($validationErrors)>0){
        $_SESSION['errors']=$validationErrors;
        header ("location:../index");
    }else{
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Phone_No=$_POST['Phone_No'];
    $Country=$_POST['Country'];
    $City=$_POST['City'];
    $Check_in=$_POST['Check_In'];
    $Check_out=$_POST['Check_Out'];
    $Tour_type=isset($_POST['Tour_Type'])?$_POST['Tour_Type']:"";
    $Rooms=isset($_POST['Rooms'])?$_POST['Rooms']:"";
    $Adults=isset($_POST['Adults'])?$_POST['Adults']:"";
    $Children=isset($_POST['Children'])?$_POST['Children']:"";
    $querry="INSERT INTO tourists_booking(name,email,phone_number,country,city,check_in,check_out,tour_type,rooms,adult,children)
    value('$Name','$Email','$Phone_No','$Country','$City','$Check_in','$Check_out','$Tour_type','$Rooms','$Adults','$Children')";
    $check=mysqli_query($Connection,$querry);
    if ($check) 
    {
        $_SESSION['success']="Data Inserted succefully";
        header ("location:../index");
    }else
    {
        echo mysqli_error();
    }
}
?>