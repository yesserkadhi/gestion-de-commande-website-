<html><body>
    
<?php 
include("head.php");
include("link_db.php");
$req="SELECT  * FROM  `compte` WHERE login = '".$_REQUEST['user']."'";

$result=mysql_query($req);
$row = mysql_num_rows ($result);


if($row>0)
{
    header("location:creation.php");
}

else if($_REQUEST['pass1']==$_REQUEST['pass2'])
 {
     $req="insert into compte VALUES ('".$_REQUEST['user']."',MD5('".$_REQUEST['pass1']."'),'client','".$_REQUEST['adr']."');";
   echo $req;
    $result=mysql_query($req);
    if($result)
    header("location:acceuilclient.php");
    else 
    header("location:creation.php");
}
include("foot.php");
?>
</body></html>