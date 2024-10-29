<?php 
$validation=[
    "Name"=>"required",
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
    }
?>