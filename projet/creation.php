<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css">
    <title>login</title>
</head>
<body>
<?php
include("head.php");
include("foot.php");
?>
<div class='x'>
    
    <form action='verifcompte.php' method='post'>
    <h3> user name</h3> <input type='text' name='user' id='xxx' placeholder="exemple : user123" class="in">
    <h3> Adresse Mail</h3><input type='text' name='adr' placeholder="site@exemple.com..." class="in">
    <h3> Password</h3><input type='password' name='pass1' placeholder="type password ..." class="in">
    <h3> Password </h3><input type='password' name='pass2' placeholder="retype password ..." class="in">
    <input type="submit" value="create" id="sub" class="in">
    </form>
    </div>

</body>
</html>