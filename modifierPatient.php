<html>
   <body>
   <head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="File-List" href="choix3_files/filelist.xml">
<link rel="stylesheet" href="css/apparence.css">                                         >

<title>Choix</title>

</head>
       <h1 align="center">Liste de Patients </h1>
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
$date_nais =$_POST['date_nais'];
$sexe =$_POST['sexe'];
$telephone =$_POST['telephone'];
$etat = $_POST['etat'];
$nom_hop= $_POST['nom_hop'];
$nom_serv = $_POST['nom_serv'];
$num_dos = $_POST['num_dos'];
$np_docteur=$_POST['np_docteur'];
$contrat = $_POST['contrat'];
$num_carnet_med=$_POST['num_carnet_med'];
//requête de mise à jours : 
$req= " UPDATE patients SET nom='$nom',prenom='$prenom',date_nais='$date_nais',sexe='$sexe',telephone=$telephone,etat= '$etat',
nom_hop='$nom_hop',nom_serv='$nom_serv',num_dos=$num_dos,np_docteur='$np_docteur',contrat='$contrat',num_carnet_med=$num_carnet_med WHERE cin= $cin " ;
//resultat : 
$rs =mysqli_query($connection,$req)or (die(mysqli_error($connection)));
require_once('afficherPatient.php');
?>

