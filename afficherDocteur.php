<?php
require_once("connection.php");
$req=" SELECT * FROM docteurs" ;
$rs = mysqli_query($connection,$req) or die (mysqli_error());
?>
<html>
<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="File-List" href="choix3_files/filelist.xml">
<link rel="stylesheet" href="css/apparence.css">                                         >

<title>Choix</title>

</head>
    <body>
    
        <table border="2" width="60%">
            <tr>
                <th>CIN </th>
                <th>Nom et prenom de docteur</th>
                <th>Sexe</th>
                <th>telephone</th>
                <th>Hopital </th>
                <th>Service </th>
                <th>Jours disponibles</th>
                <th>Specialite</th>
            </tr>
            <?php while ($DT =mysqli_fetch_assoc($rs))  { ?>
            <tr>
                <td> <?php  echo ($DT ['cin'] )?> </td>
                <td> <?php  echo ($DT ['np_docteur'] )?> </td>
                <td> <?php  echo ($DT ['sexe'] )?> </td>
                <td> <?php  echo ($DT ['telephone'] )?> </td>
                <td> <?php  echo ($DT ['nom_hop'] )?> </td>
                <td> <?php  echo ($DT ['nom_serv'] )?> </td>
                <td> <?php  echo ($DT ['jour_dispo'] )?> </td>
                <td> <?php  echo ($DT ['specialite'] )?> </td>

                <td><a href="SupprimerDocteur.php?cin=<?php  echo ($DT ['cin'] )?>">Supprimer </a></td>
                <td><a href="editDocteur.php?cin=<?php  echo ($DT ['cin'] )?>">Modifier </a></td>
            </tr>
            <?php } ?>
        </table>
        <form method="POST" action="">
            <p align="center"><a href="home.php">
                <input class="botton" type="button" value="Retour au acceuil" name="B6"></a></p>
        </form>
    </body>
</html>
