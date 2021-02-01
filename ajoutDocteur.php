<?php
//connexion à la base:
require_once('connection.php');
//récupération des données :
$cin =$_POST['cin'];
$np_docteur =$_POST['np_docteur'];
$sexe =$_POST['sexe'];
$telephone =$_POST['telephone'];
$nom_hop=$_POST['nom_hop'];
$nom_serv =$_POST['nom_serv'];
$jour_dispo =$_POST['jour_dispo'];
$specialite =$_POST['specialite'];
//$nomPhoto = $_POST['photo']['name'];
//$files_tmp_name =$_FILES['photo']['tmp_name'];
//move_uploaded_file($files_tmp_name,"./images/$nomPhoto"); 
   
//afficher les patients de la base :
$requete="SELECT * FROM docteurs WHERE cin='$cin' ";
//appel à la requete :
$result= mysqli_query($connection,$requete);
//tester l'existance : 
$num =mysqli_num_rows($result);
    
if( $num==1){
    echo " Docteur existe déjà ";
}
else{
    //ajout des patients à la base : 
    $reg= " INSERT INTO docteurs (cin,np_docteur,sexe,telephone,nom_hop,nom_serv,jour_dispo,specialite) VALUES ($cin ,'$np_docteur',
    '$sexe',$telephone,'$nom_hop','$nom_serv','$jour_dispo','$specialite') ";
    mysqli_query($connection,$reg) or (die(mysqli_error($connection)));
    echo " Docteur ajouté";  
   
}
//fermer la connexion:
mysqli_close($connection);
print("Vous êtes bien inscrit à notre base ,Merci !") 

?>

<html>
<body>
   <table align="center">
       <br> <br> <br> <br>
       <tr>
           <td>CIN: <?php echo ($cin) ?> </td>
       </tr>
       <tr>
       <td>Nom & Prenom docteur: <?php echo ($np_docteur) ?> </td>
        </tr>
        <tr>
           <td>telephone: <?php echo ($telephone) ?> </td>
        </tr>
        <tr>
           <td>Sexe: <?php echo ($sexe) ?> </td>
        </tr>
        <tr>
        <td>Jour disponible: <?php echo ($jour_dispo) ?> </td>
        </tr>
        <tr>
           <td>Hopital: <?php echo ($nom_hop) ?> </td>
        </tr>
        <tr>
           <td>Service: <?php echo ($nom_serv) ?> </td>
        </tr>
        <tr>
            <td>Specialte: <?php echo ($specialite) ?> </td>
        </tr>
   </table>
           <!-- <td>Photo: <img src='images/<?php echo ($nomPhoto) ?>'> </td> -->
       </tr>
   </table>
   <form method="POST" action="">
            <p align="center"><a href="home.php">
                <input class="botton" type="button" value="Retour au acceuil" name="B6"></a></p>
        </form>
</body>
</html>


