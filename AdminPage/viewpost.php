<?php
include "../databases/database.php";
$id=$_GET['id'];
$getblogdata= mysqli_query($Connection, "SELECT * FROM author_blogs WHERE id = $id");
$myrow=mysqli_fetch_array($getblogdata);
echo json_encode($myrow);

?>