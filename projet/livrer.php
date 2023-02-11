<?php

session_start();
if ($_SESSION['status']=="connected"){
include("head.php");
include("link_db.php");
include("foot.php");

$query="Update commande set liv=1";
    $result=mysql_query($query);
header("location:listecommand.php"); 
}
else 
header("location:connect.php");
?>