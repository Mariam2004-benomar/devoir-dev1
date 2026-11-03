<?php
$C=new PDO("mysql:host=localhost;dbname=exelib","root","");
if (isset($_POST['titre'])){
    $id=$_GET['id'];
    $titre=$_POST['titre'];
    $auteur=$_POST['auteur'];
    $date_creation=$_POST['date_creation'];
    $S="UPDATE exercice SET titre='$titre',auteur='$auteur',date_creation='$date_creation' WHERE id=$id";
    $C->query($S);
    header('LOCATION: affich.php');
    exit();
  };
$id=$_GET['id'];
$rq="SELECT * FROM exercice WHERE id=$id";
$rs=$C->query($rq);
$x=$rs->fetch(PDO::FETCH_ASSOC);
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
