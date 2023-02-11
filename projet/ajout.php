<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css">
    <title>ajout_product</title>
</head>
<body>
<?php
session_start();
if ($_SESSION['status']=="connected"){
include("head.php");
include("link_db.php");
include("foot.php");

?>
<div class='x'>
    
    <form action='verifajout.php' method='POST' enctype="multipart/form-data">
    <input type="hidden" name="id" >
    <h3> nom:</h3><input type='text' name='nom' class="in">
    <h3> description:</h3><input type='text' name='des'   class="in">
    <h3> prix:</h3><input type='text' name='prix'  class="in" >
    <h3> image:</h3><input type='file' name='image'  class="in" >
   
    <input type="submit" value="ajouter" id="sub" class="in">
    </form>
    <br>
    <form action='acceuiladmin.php' method='post'>
    <input type="submit" value="cancel" id="sub" class="in">
    </form>
    </div>
    <?php
}
else 
header("location:connect.php");
?>
</body>
</html>