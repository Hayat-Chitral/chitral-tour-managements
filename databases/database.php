<?php
session_start();
function dd($variable){
    echo '<pre style="background:#000; color:#00FF00">';
    die(var_dump($variable));
    echo '</pre>';
}


$Connection=mysqli_connect('localhost','root','','tirichmirtravel');
if (!$Connection) {
	echo mysqli_error();
}else{
	// echo "Database is connected";
}


?>