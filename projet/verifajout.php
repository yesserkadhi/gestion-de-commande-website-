<?php

session_start();
if ($_SESSION['status']=="connected"){
include("head.php");
include("link_db.php");
include("foot.php");
$targer_folder="img/";
$target_file=$targer_folder.basename($_FILES["image"]["name"]);
$uploadok=1;
$imagefiletype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// verifier si le fichier est une image ou non
if (isset($_POST["submit"])){
    $check= getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false){
        echo "file is an image - " . $check["mime"];
        $uploadok=1;
    }
    else {
        echo "file is not an image";
        $uploadok=0;
    }
}
//verifier l'existance de l'image
if (file_exists($target_file)){
    echo "sorry, image already exists";
    $uploadok=0;
}
//verifier la taille de l'image
if ($_FILES["image"]["size"]>500000){
    echo "sorry, your file is too large";
    $uploadok=0;
}
//verifier la valeur de $uploadok
if ($uploadok==0){
    echo "sorry, your file was not uploaded.";
}
else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"],$target_file)){
        echo "the file ". basename($_FILES["image"]["name"]). " has been uploaded";
    }
    else 
    {
        echo "sorry , there was an error uploading your file.";
    }
}
// update si l'image uploaded
if ($uploadok==1){
    $query="insert into  produits values(null,'".$_POST['nom']."','".$_POST['des']."','".$_FILES["image"]["name"]."',".$_POST['prix']." )";
    $result=mysql_query($query);
    header("location:acceuiladmin.php");
}
else 
header("location:modif.php?".$_post['id']); 
}
else 
header("location:connect.php");
?>