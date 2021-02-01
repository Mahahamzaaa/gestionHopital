<?php
require_once("connection.php");
$mc="NULL"; 
if(isset($_POST['motCle'])){
    $mc= $_POST['motCle'] ; 
}
$req=" SELECT * FROM agents WHERE nom LIKE '%$mc%'  " ;
$rs = mysqli_query($connection,$req) or die (mysqli_error());
?>

<html>
<head>
<title>Recherche Docteur</title>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="File-List" href="choix3_files/filelist.xml">
<link rel="stylesheet" href="css/apparence.css">                                         >

<title>Choix</title>

</head>
</head>
<body class="recherche">
<p align="center" class="inscriptiontitre"><b>Rechercher un agent</b></p>

<form method="POST" action="Recherche_Agent.php">
      <p align="left" >        
            Tapez le Mot cle : <input type="text" name="motCle" value="<?php echo ($mc) ?>">
            <button type="submit" >Rechercher agent</button>
        </p> 
        <br> <br> <br> <br>
</form>
<p align="left">Liste des agents: </p>
    <table border="2" width="50%" align="left">
        <tr>
                <th>CIN </th>
                <th>Nom </th>
                <th>Prenom </th>
               
              
         </tr>
        <?php while ($AT =mysqli_fetch_assoc($rs))  { ?>
            <tr>
                <td> <?php  echo($AT ['cin'] )?> </td>
                <td> <?php  echo($AT ['nom'] )?> </td>
                <td> <?php  echo($AT ['prenom'] )?> </td>
           

                <td><a href="SupprimerAgent.php?cin=<?php echo($AT ['cin'] )?>">Supprimer </a></td>
                <td><a href="editAgent.php?cin=<?php  echo($AT ['cin'] )?>">Modifier </a></td>
            </tr>
        <?php } ?>  
    </table>
    <form method="POST" action="">
            <p align="center"><a href="home.php">
                <input class="botton" type="button" value="Retour au acceuil" name="B6"></a></p>
        </form>
</body>

</html>


