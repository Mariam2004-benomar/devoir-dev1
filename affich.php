<html>
    <head>
        <style>
            th{ background: orange; color:black;}
            td{ background: blue; color:white}
            td a {color: white;}
            </style>
    </head>
</html>
<?php
$C=mysqli_connect("localhost","root","","exelib") or die(mysqli_connect_error());
$rq="SELECT * FROM exercice";
$rs=mysqli_query($C,$rq);
?>
<table border="1">
<tr>
<th> ID </th>
<th> Titre </th>
<th> Auteur </th>
<th> Date_Creation </th>
<th> Action </th>
</tr>
<?php
while($x=mysqli_fetch_assoc($rs)){ ?>
    <tr>
        <td><?php echo($x['id']) ?></td> 
        <td><?php echo($x['titre']) ?></td>
        <td><?php echo($x['auteur']) ?></td>
        <td><?php echo($x['date_creation']) ?></td>
        <td>
            <a href="modif.php?id=<?php echo $x['id']; ?>">MODIFIER</a>
            <a href="supp.php?id=<?php echo $x['id']; ?>">SUPPRIMER</a>
        </td>
</tr>
<?php } ?>
</table>

