<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css">
    <title>passage de commande</title>
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
    
    <form action='verifcomm.php' method='POST' enctype="multipart/form-data">
    
    <input type='hidden' name='id_art'  value="<?php echo $_REQUEST['id']; ?>" class="in">
    <h3> adresse complete:</h3><input type='text' name='adr'   class="in">
    <h3> code postal:</h3><input type='text' name='cdp'  class="in">
    <h3> prix:</h3><input type='text' name='prix'  class="in" value="<?php echo $row['prix']; ?>">
    <h3> Numero de telephone:</h3><input type='text' name='tel' class="in"  >
    <input type="submit" value="passer la commande" id="sub" class="in">
    </form>
    <form action='acceuilclient.php' method='post'>
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