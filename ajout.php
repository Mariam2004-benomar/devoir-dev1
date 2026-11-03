<?php
$C=new PDO("mysql:host=localhost;dbname=exelib","root","");
$T=$_POST['titre'];
$A=$_POST['auteur'];
$D=$_POST['date_creation'];
$S="INSERT INTO exercice (titre,auteur,date_creation) VALUES ('$T','$A','$D')";
$rs=$C->query($S);
header('LOCATION:affich.php');
?>
