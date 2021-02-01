<html>
<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="File-List" href="choix3_files/filelist.xml">
<link rel="stylesheet" href="css/apparence.css">                                         >

<title>Choix</title>

</head>
   <body>
       <h1 align="center">Liste des agents </h1>
       <form method="POST" action="">
            <p align="center"><a href="home.php">
                <input class="botton" type="button" value="Retour au acceuil" name="B6"></a></p>
        </form>
   </body> 
 </html>
<?php 
// connexion à la base : 
require_once("connection.php") ;
//récuperation de données : 
$cin =$_POST['cin'];
$nom =$_POST['nom'];
$prenom =$_POST['prenom'];
$nom_hop= $_POST['nom_hop'];
$nom_serv = $_POST['nom_serv'];
$sexe =$_POST['sexe'];
$telephone =$_POST['telephone'];

//requête de mise à jours : 
$req= " UPDATE agents SET nom='$nom',prenom='$prenom',nom_hop='$nom_hop',nom_serv='$nom_serv',sexe='$sexe',telephone=$telephone WHERE cin= $cin " ;
//resultat : 
$rs =mysqli_query($connection,$req)or (die(mysqli_error($connection)));
require_once('afficherAgent.php');
?>

