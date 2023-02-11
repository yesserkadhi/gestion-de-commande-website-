<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/styleconnection.css">
    <title>login</title>
</head>
<body>
<?php
include("foot.php");
?>
<div class='xx'>
    
    <form action='verifconnection.php' method='post'>
    <h3> user name</h3> <input type='text' name='user' id='xxx' placeholder="exemple : user123" class="in">
    <h3> Password </h3><input type='password' name='pass' placeholder=" password ..." class="in">
    <h3> stay in touch <input type='checkbox' name="connexion" value="rest_connect"> </h3> 
    <input type="submit" value="connect" id="sub" class="in">
    </form>
    <form action='creation.php' method='post'>
    <input type="submit" value="create an account" id="sub" class="in">
    </form>
    </div>
   
<?php
include("head.php");


?>
</body>
</html>