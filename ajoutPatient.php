<?php
//connexion à la base:
require_once('connection.php');
//récupération des données :
$cin =$_POST['cin'];
$nom =$_POST['nom'];
$prenom =$_POST['prenom'];
$date_nais =$_POST['date_nais'];
$nom_hop=$_POST['nom_hop'];
$nom_serv =$_POST['nom_serv'];
$telephone =$_POST['telephone'];
$sexe =$_POST['sexe'];
$etat =$_POST['etat'];
$contrat =$_POST['contrat'];
$np_docteur =$_POST['np_docteur'];
$num_dos =$_POST['num_dos'];
$num_carnet_med =$_POST['num_carnet_med'];
//afficher les patients de la base :
$requete="SELECT * FROM patients WHERE cin='$cin' ";
//appel à la requete :
$result= mysqli_query($connection,$requete)or (die(mysqli_error($connection)));
//tester l'existance : 
$num =mysqli_num_rows($result);
    
if( $num==1){
    echo " Patient existe déjà ";
}
else{
    //ajout des patients à la base : 
    $reg= " INSERT INTO patients (cin,nom,prenom,date_nais,sexe,telephone,etat,nom_hop,nom_serv,num_dos,np_docteur,num_carnet_med,contrat) 
   VALUES ($cin ,'$nom', '$prenom','$date_nais','$sexe',$telephone,'$etat','$nom_hop','$nom_serv',$num_dos,'$np_docteur',$num_carnet_med,'$contrat') ";
    mysqli_query($connection,$reg) or (die(mysqli_error($connection)));
    echo " patient ajouté";  
}
//fermer la connexion:
mysqli_close($connection);
print("Vous êtes bien inscrit à notre base ,Merci !") ;

?>
<html>
<body>
   <table align="center">
       <br> <br> <br> <br>
       <tr>
           <td>CIN: <?php echo ($cin) ?> </td>
       </tr>
       <tr>
           <td>Nom: <?php echo ($nom) ?> </td>
        </tr>
        <tr>
           <td>Prenom: <?php echo ($prenom) ?> </td>
        </tr>
        <tr>
           <td>Date Naissance: <?php echo ($date_nais) ?> </td>
        </tr>
        <tr>
           <td>telephone: <?php echo ($telephone) ?> </td>
        </tr>
        <tr>
           <td>Sexe: <?php echo ($sexe) ?> </td>
        </tr>
        <tr>
           <td>Etat: <?php echo ($etat) ?> </td>
        </tr>
        <tr>
           <td>Hopital: <?php echo ($nom_hop) ?> </td>
        </tr>
        <tr>
           <td>Service: <?php echo ($nom_serv) ?> </td>
        </tr>
        <tr>
           <td>Numero de dossier <?php echo ($num_dos) ?> </td>
        </tr>
        <tr>
           <td>Suivi par le DOCTEUR: <?php echo ($np_docteur) ?> </td>
        </tr>
        <tr>
           <td>Numero de carnet medical: <?php echo ($num_carnet_med) ?> </td>
        </tr>
   </table>
   <form method="POST" action="">
            <p align="center"><a href="home.php">
                <input class="botton" type="button" value="Retour au acceuil" name="B6"></a></p>
        </form>
</body>
</html>
