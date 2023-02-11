<html>
<body>
<?php

session_start();
if ($_SESSION['status']=="connected"){
include("head.php");
include("link_db.php");
include("foot.php");
?>


<form action="deconnect.php" method="get">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">    
<input type="submit" value="deconnect" class="modif">
</form>
<table border='1'>
<tr>

<th>nom</th>
<th>description</th>
<th>image</th>
<th>prix</th>
<th > commander</th>

<tr>
<?php
$req="select * from produits";
$res=mysql_query($req);

while ($row=mysql_fetch_array($res)){
?>
<tr>

<td><?php echo $row['nom'];?></td>
<td><?php echo $row['description'];?></td>
<td><img src="img/<?php echo $row['img'];?>" height=50px></td>
<td><?php echo $row['prix']."dt";?></td>
<td >
<form action="command.php" method="get">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">    
<input type="submit" value="commander" class="modif">
</form>
</td>

<tr>
<?php
}
?>
</table>

<?php
}
else 
header("location:connect.php");
?>

</body>
</html>