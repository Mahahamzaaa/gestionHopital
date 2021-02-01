<?php
require_once("connection.php");
$mc="NULL"; 
if(isset($_POST['motCle'])){
    $mc= $_POST['motCle'] ; 
}
$req=" SELECT * FROM patients WHERE nom LIKE '%$mc%'  " ;
$rs = mysqli_query($connection,$req) or die (mysqli_error());
?>

<html>
<head>
<title>Recherche Patient</title>
<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="File-List" href="choix3_files/filelist.xml">
<link rel="stylesheet" href="css/apparence.css">                                         >

<title>Choix</title>

</head>
<body class="recherche">
<p align="center" class="inscriptiontitre"><b>Rechercher un patient</b></p>

<form method="POST" action="Recherche_Patient.php">
      <p align="left" >        
            Tapez le Mot cle : <input type="text" name="motCle" value="<?php echo ($mc) ?>">
            <button type="submit" >Rechercher Patient</button>
        </p> 
        <br> <br> <br> <br>
</form>
<p align="left">Liste de Patients: </p>
    <table border="2" width="50%" align="left">
        <tr>
                <th>CIN </th>
                <th>Nom </th>
                <th>Prenom </th>
         </tr>
        <?php while ($PT =mysqli_fetch_assoc($rs))  { ?>
            <tr>
                <td> <?php  echo($PT ['cin'] )?> </td>
                <td> <?php  echo($PT ['nom'] )?> </td>
                <td> <?php  echo($PT ['prenom'] )?> </td>

                <td><a href="SupprimerPatient.php?cin=<?php echo($PT ['cin'] )?>">Supprimer </a></td>
                <td><a href="editPatient.php?cin=<?php  echo($PT ['cin'] )?>">Modifier </a></td>
            </tr>
        <?php } ?>  
    </table>
    <form method="POST" action="">
            <p align="center"><a href="home.php">
                <input class="botton" type="button" value="Retour au acceuil" name="B6"></a></p>
        </form>
</body>

</html>


