<?php
//connexion à la base:
require_once('connection.php');
//récupération des données :
$cin =$_POST['cin'];
$nom =$_POST['nom'];
$prenom =$_POST['prenom'];
$nom_hop=$_POST['nom_hop'];
$nom_serv =$_POST['nom_serv'];
$sexe =$_POST['sexe'];
$telephone =$_POST['telephone'];
//$nomPhoto = $_POST['photo']['name'];
//$files_tmp_name =$_FILES['photo']['tmp_name'];
//move_uploaded_file($files_tmp_name,"./images/$nomPhoto"); 

//afficher les patients de la base :
$requete="SELECT * FROM agents WHERE cin='$cin' ";
//appel à la requete :
$result= mysqli_query($connection,$requete)or (die(mysqli_error($connection)));
//tester l'existance : 
$num =mysqli_num_rows($result);
    
if( $num==1){
    echo "Agent existe déjà ";
}
else{
    //ajout des patients à la base : 
    $reg= " INSERT INTO agents (cin,nom,prenom,sexe,telephone,nom_hop,nom_serv) VALUES ($cin ,'$nom', '$prenom','$sexe',$telephone,'$nom_hop','$nom_serv') ";
    mysqli_query($connection,$reg) or (die(mysqli_error($connection)));
    echo " Agent ajouté";  
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
       <td>Nom : <?php echo ($nom) ?> </td>
        </tr>
        <tr>
        <td>Prenom : <?php echo ($prenom) ?> </td>
        </tr>
        <tr>
           <td>Hopital: <?php echo ($nom_hop) ?> </td>
        </tr>
        <tr>
           <td>Service: <?php echo ($nom_serv) ?> </td>
        </tr>
        <tr>
           <td>Sexe: <?php echo ($sexe) ?> </td>
        </tr>
        <tr>
           <td>telephone: <?php echo ($telephone) ?> </td>
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
