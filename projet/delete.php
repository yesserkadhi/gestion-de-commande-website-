<?php

session_start();
if ($_SESSION['status']=="connected"){
include("head.php");
include("link_db.php");
include("foot.php");


$req="SELECT * FROM  `produits` WHERE id =".$_REQUEST['id'];
echo $req;
$res=mysql_query($req);
$row=mysql_fetch_array($res);
$targer_folder="img/";
$target_file=$targer_folder.$row['img'];
// delete image from folder img
unlink($target_file);
$query="delete from produits where id =".$row['id'];
    $result=mysql_query($query);
    header("location:acceuiladmin.php");
}
else 
header("location:connect.php");
?>