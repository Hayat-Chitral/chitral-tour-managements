<?php
include "databases/database.php";
session_unset();
session_destroy();
header('location:login.php');

?>
