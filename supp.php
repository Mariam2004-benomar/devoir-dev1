<?php
$C=mysqli_connect("localhost","root","","exelib")or die(mysqli_connect_error());
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $S="DELETE FROM exercice WHERE id=$id";
    mysqli_query($C,$S);
    header('location:affich.php');
    exit();
}
?>
