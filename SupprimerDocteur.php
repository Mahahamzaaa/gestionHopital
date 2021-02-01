<?php 
// connexion à la base : 
require_once("connection.php"); 
//récuperation de données : 
$cin=$_GET['cin'];
//requête de supprimer :
$req= "DELETE FROM docteurs WHERE cin='$cin' " ;
//appel à la requete :
mysqli_query($connection,$req)or (die(mysqli_error($connection)));
//redirectinon : header("location:afficherDocteur.php");
//forword method de client vers le serveur vers le fichier SupprimerDocteur puis vers afficherDocteur.php qui va retourner la resultat de la requête au Docteur : 
require_once('afficherDocteur.php');

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
    <form method="POST" action="">
            <p align="center"><a href="home.php">
                <input class="botton" type="button" value="Retour au acceuil" name="B6"></a></p>
        </form>
    </body>
</html>