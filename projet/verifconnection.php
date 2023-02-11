<html><body>
    
<?php
include("head.php");
include("link_db.php");
$req="SELECT * FROM `compte` where login ='".$_REQUEST['user']."' and password=MD5('".$_REQUEST['pass']."')";

$res=mysql_query($req);
$result=mysql_num_rows($res);
$job=mysql_fetch_array($res);

if ($result>0)
{  
  if ((isset($_REQUEST['connexion'])) and ($_REQUEST['connexion']=="rest_connect")){
$cookies_name=$_REQUEST['user'];
$cookies_value="connect";
setcookie($cookies_name,$cookies_value,time()+(86400*30),"/");
//86400=1day
  }
 
  session_start();
  $_SESSION['login']=$_REQUEST['user'];
  $_SESSION['status']="connected";  
  if ($job['fonction']=="admin")
  header("location:acceuiladmin.php");
  else
  header("location:acceuilclient.php");
}
else 
header("location:connect.php");
include("foot.php");
?>
</body></html>