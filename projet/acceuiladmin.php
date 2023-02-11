<?php

session_start();
if ($_SESSION['status']=="connected"){
include("head.php");
include("link_db.php");
include("foot.php");
?>
<form action="ajout.php" method="get">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">    
<input type="submit" value="ajouter" class="modif">
</form>
<br>
<form action="deconnect.php" method="get">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">    
<input type="submit" value="deconnect" class="modif">
</form>
<br>
<form action='listecommand.php' method='post'>
    <input type="submit" value="list command"  class="modif">
    </form>
<table border='1'>
<tr>
<th>identifiant</th>
<th>nom</th>
<th>description</th>
<th>image</th>
<th>prix</th>
<th > modifier</th>
<th > supprimer</th>
<tr>
<?php
$req="select * from produits";
$res=mysql_query($req);

while ($row=mysql_fetch_array($res)){
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['nom'];?></td>
<td><?php echo $row['description'];?></td>
<td><img src="img/<?php echo $row['img'];?>" height=50px></td>
<td><?php echo $row['prix']."dt";?></td>
<td >
<form action="modif.php" method="get">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">    
<input type="submit" value="modifier" class="modif">
</form>
</td>
<td >
<form action="delete.php" method="get">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">    
<input type="submit" value="supprimer" class="modif">
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
