<?php

session_start();
if ($_SESSION['status']=="connected"){
include("head.php");
include("link_db.php");
include("foot.php");
$i=$_REQUEST['id_art'];
$a=$_REQUEST['adr'];
$b=$_REQUEST['cdp'];
$c=$_REQUEST['prix'];
$d=$_REQUEST['tel'];
if (($a!="") and ($b!="") and ($c!="") and ($d!=""))
{
    $query="insert into  commande values(null,".$i.",'".$_SESSION['login']."','".$a."',".$b.",".$d.")";
    $result=mysql_query($query);
if ($result)
 header("location:acceuilclient.php"); 
 else echo "hhhh";
}
else 
echo "verifier les champs";
}
else 
header("location:connect.php");
?>