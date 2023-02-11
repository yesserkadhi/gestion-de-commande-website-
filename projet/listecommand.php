<?php
session_start();
if ($_SESSION['status']=="connected"){
include("head.php");
include("link_db.php");
include("foot.php");
?>

<form action="deconnect.php" method="get">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">    
<input type="submit" value="disconnect" class="modif">
</form>
<br>
<form action='acceuiladmin.php' method='post'>
    <input type="submit" value="return"  class="modif">
    </form>
<table border='1'>
<tr>
<th>id_com</th>
<th>id_art</th>
<th>id_client</th>
<th>adresser complete</th>
<th>3083</th>
<th > numerp de telephone</th>
<th > livrer</th>
<tr>
<?php
$req="select * from commande where liv=0";
$res=mysql_query($req);

while ($row=mysql_fetch_array($res)){
?>
<tr>
<td><?php echo $row['id_com'];?></td>
<td><?php echo $row['id_art'];?></td>
<td><?php echo $row['id_client'];?></td>
<td><?php echo $row['adr'];?></td>
<td><?php echo $row['cdp'];?></td>
<td><?php echo $row['num_tel'];?></td>
<td >
<form action="livrer.php" method="get">
<input type="hidden" name="id" value="<?php echo $row['id_com'];?>">    
<input type="submit" value="livrer" class="modif">
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
