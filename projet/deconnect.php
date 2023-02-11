<?php

session_start();
if ($_SESSION['status']=="connected"){
include("head.php");
include("link_db.php");
include("foot.php");
$_SESSION['status']="disconnected";
header("location:connect.php");
}
else 
header("location:connect.php");
?>