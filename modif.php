<?php
$C=mysqli_connect("localhost","root","","exelib")or die(mysqli_connect_error());
if (isset($_POST['titre'])){
    $id=$_GET['id'];
    $titre=$_POST['titre'];
    $auteur=$_POST['auteur'];
    $date_creation=$_POST['date_creation'];
    $S="UPDATE exercice SET titre='$titre',auteur='$auteur',date_creation='$date_creation' WHERE id=$id";
    mysqli_query($C,$S);
    header('LOCATION: affich.php');
    exit();
  };
$id=$_GET['id'];
$rq="SELECT * FROM exercice WHERE id=$id";
$rs=mysqli_query($C,$rq);
$x=mysqli_fetch_assoc($rs);
?>
<form method="POST" action="modif.php?id= <?php echo $id ?>" >
TITRE :
<input type="text" name="titre" value="<?php echo $x['titre'] ?>" ><br>
AUTEUR :
<input type="text" name="auteur" value="<?php echo $x['auteur'] ?>" ><br>
DATE :
<input type="date" name="date_creation" value="<?php echo $x['date_creation'] ?>" ><br>
<input type="submit" value="Modifier" >
</form>
