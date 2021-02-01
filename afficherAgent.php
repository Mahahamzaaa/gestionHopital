<?php
require_once("connection.php");
$req=" SELECT * FROM agents" ;
$rs = mysqli_query($connection,$req) or die (mysqli_error());
?>
<html>
    <body>
    <head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="File-List" href="choix3_files/filelist.xml">
<link rel="stylesheet" href="css/apparence.css">                                         >

<title>Choix</title>

</head>
        <table border="2" width="60%">
            <tr>
                <th>CIN </th>
                <th>Nom </th>
                <th>Prenom </th>
                <th>Hopital </th>
                <th>Service </th>
                <th>Sexe</th>
                <th>telephone</th>
            </tr>
            <?php while ($AT =mysqli_fetch_assoc($rs))  { ?>
            <tr>
                <td> <?php  echo ($AT ['cin'] )?> </td>
                <td> <?php  echo ($AT ['nom'] )?> </td>
                <td> <?php  echo ($AT ['prenom'] )?> </td>
                <td> <?php  echo ($AT ['nom_hop'] )?> </td>
                <td> <?php  echo ($AT ['nom_serv'] )?> </td>
                <td> <?php  echo ($AT ['sexe'] )?> </td>
                <td> <?php  echo ($AT ['telephone'] )?> </td>

                <td><a href="SupprimerAgent.php?cin=<?php  echo ($AT ['cin'] )?>">Supprimer </a></td>
                <td><a href="editAgent.php?cin=<?php  echo ($AT ['cin'] )?>">Modifier </a></td>
            </tr>
            <?php } ?>
        </table>
        <form method="POST" action="">
            <p align="center"><a href="home.php">
                <input class="botton" type="button" value="Retour au acceuil" name="B6"></a></p>
        </form>
    </body>
</html>
