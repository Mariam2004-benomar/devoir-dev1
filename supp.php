<?php
$C=new PDO("mysql:host=localhost;dbname=exelib","root","");
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $S="DELETE FROM exercice WHERE id=$id";
    $C->query($S);
    header('location:affich.php');
    exit();
}
?>
