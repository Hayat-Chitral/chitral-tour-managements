<?php
// session_start();
    include "../databases/database.php";
    $validation=["name"=>"required",
    "email"=> "required",
    "msg"=> "required"];
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
        echo '<script>alert("hello world")<script>';
        header ("location:../index");
    }else{
    $NAME=$_POST['name'];
    $EMAIL=$_POST['email'];
    $MSG=$_POST['msg']; 

    $query="INSERT INTO contact_us(name,email,message)value('$NAME','$EMAIL','$MSG')";
    $check=mysqli_query($Connection,$query);
    if (!$check) {
        echo '<script>alert("hello world")<script>';
        header ("location:../index");
    }else{
        echo mysqli_error();

    }
}
?>



