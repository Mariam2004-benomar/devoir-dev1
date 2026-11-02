<?php
$C=mysqli_connect("localhost","root","","exelib") or die(mysqli_connect_error());
$T=$_POST['titre'];
$A=$_POST['auteur'];
$D=$_POST['date_creation'];
$S="INSERT INTO exercice (titre,auteur,date_creation) VALUES ('$T','$A','$D')";
$rs=mysqli_query($C,$S);
header('LOCATION:affich.php');
?>