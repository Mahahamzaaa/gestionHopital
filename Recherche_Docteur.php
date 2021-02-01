<?php
require_once("connection.php");
$mc="NULL"; 
if(isset($_POST['motCle'])){
    $mc= $_POST['motCle'] ; 
}
$req=" SELECT * FROM docteurs WHERE np_docteur LIKE '%$mc%'  " ;
$rs = mysqli_query($connection,$req) or die (mysqli_error($connection));
?>

<html>
<head>
<title>Recherche Docteur</title>
<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="File-List" href="choix3_files/filelist.xml">
<link rel="stylesheet" href="css/apparence.css">                                         >

<title>Choix</title>

</head>
<body class="recherche">
<p align="center" class="inscriptiontitre"><b>Rechercher un docteur</b></p>

<form method="POST" action="Recherche_Docteur.php">
      <p align="left" >        
            Tapez le Mot cle : <input type="text" name="motCle" value="<?php echo ($mc) ?>">
            <button type="submit" >Rechercher docteur</button>
        </p> 
        <br> <br> <br> <br>
</form>
<p align="left">Liste de docteurs: </p>
    <table border="2" width="50%" align="left">
        <tr>
                <th>CIN </th>
                <th>Nom et prenom </th>
              
         </tr>
        <?php while ($DT =mysqli_fetch_assoc($rs))  { ?>
            <tr>
                <td> <?php  echo($PT ['cin'] )?> </td>
                <td> <?php  echo($PT ['np_docteur'] )?> </td>
           

                <td><a href="SupprimerDocteur.php?cin=<?php echo($DT ['cin'] )?>">Supprimer </a></td>
                <td><a href="editDocteur.php?cin=<?php  echo($DT ['cin'] )?>">Modifier </a></td>
            </tr>
        <?php } ?>  
    </table>
    <form method="POST" action="">
            <p align="center"><a href="home.php">
                <input class="botton" type="button" value="Retour au acceuil" name="B6"></a></p>
        </form>
</body>

</html>


