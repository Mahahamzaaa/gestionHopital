<?php
require_once("connection.php");
$req=" SELECT * FROM patients" ;
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
                <th>Nom </th>
                <th>Prenom </th>
                <th>Date de Naissance </th>
                <th>Hopital </th>
                <th>Service </th>
                <th>telephone</th>
                <th>Sexe</th>
                <th>Etat</th>
                <th>Contrat </th>
                <th>Nom & prenom Docteur</th>
                <th>Numero dossier</th>
                <th>Numero de carnet medical</th>
            </tr>
            <?php while ($PT =mysqli_fetch_assoc($rs))  { ?>
            <tr>
                <td> <?php  echo ($PT ['cin'] )?> </td>
                <td> <?php  echo ($PT ['nom'] )?> </td>
                <td> <?php  echo ($PT ['prenom'] )?> </td>
                <td> <?php  echo ($PT ['date_nais'] )?> </td>
                <td> <?php  echo ($PT ['telephone'] )?> </td>
                <td> <?php  echo ($PT ['sexe'] )?> </td>
                <td> <?php  echo ($PT ['etat'] )?> </td>
                <td> <?php  echo ($PT ['nom_hop'] )?> </td>
                <td> <?php  echo ($PT ['nom_serv'] )?> </td>
                <td> <?php  echo ($PT ['contrat'] )?> </td>
                <td> <?php  echo ($PT ['np_docteur'] )?> </td>
                <td> <?php  echo ($PT ['num_dos'] )?> </td>
                <td> <?php  echo ($PT ['num_carnet_med'] )?> </td>

                <td><a href="SupprimerPatient.php?cin=<?php  echo ($PT ['cin'] )?>">Supprimer </a></td>
                <td><a href="editPatient.php?cin=<?php  echo ($PT ['cin'] )?>">Modifier </a></td>
            </tr>
            <?php } ?>
        </table>
        <form method="POST" action="">
            <p align="center"><a href="home.php">
                <input class="botton" type="button" value="Retour au acceuil" name="B6"></a></p>
        </form>
    </body>
</html>
