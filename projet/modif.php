<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css">
    <title>modif</title>
</head>
<body>
<?php
session_start();
if ($_SESSION['status']=="connected"){
include("head.php");
include("link_db.php");
include("foot.php");
$req="select * from produits where id=".$_REQUEST['id'];
$res=mysql_query($req);
$row=mysql_fetch_array($res);
?>
<div class='x'>
    
    <form action='verifmodif.php' method='POST' enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <h3> nom:</h3><input type='text' name='nom' value="<?php echo $row['nom']; ?>" class="in">
    <h3> description:</h3><input type='text' name='des'  value="<?php echo $row['description']; ?>" class="in">
    <h3> prix:</h3><input type='text' name='prix'  class="in" value="<?php echo $row['prix']; ?>">
    <h3> image:</h3><input type='file' name='image'  class="in" value="<?php echo $row['img']; ?>">
   
    <input type="submit" value="update" id="sub" class="in">
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