<?php 
// connexion à la base : 
require_once("connection.php"); 
//récuperation de données : 
$cin=$_GET['cin'];

//requête de mise à jours : 
$req= "SELECT * FROM agents WHERE cin=$cin" ;
//resultat : 
$rs = mysqli_query($connection,$req) or die (mysqli_error());
//verifier l'existance : 
$AT =mysqli_fetch_assoc($rs);
?>
<html>
<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="File-List" href="choix3_files/filelist.xml">
<link rel="stylesheet" href="css/apparence.css"> 
<title>Choix</title>

</head>
    <body>
    <form method="POST" action="modifierAgent.php">
		<table>
			<tr>
		    <p align="center">
            <td><label for="cin" >Carte d'identite :</label></td>
			   <td><?php echo ($AT['cin']) ?><input id="cin" type="hidden" name="cin" size="40" value="<?php echo ($AT['cin']) ?>" required><br><br></td>
			</tr>
			<tr>
				<td><label for="nom" >Nom :  </label></td>
				<td><input id="nom" type="text" name="nom" size="40"required><br><br></td>
			</tr>
			<tr>
				<td><label for="prenom" >Prenom :</label></td>
				<td><input id="prenom" type="text" name="prenom" size="40" required><br><br></td>
			</tr>
			<tr>
				<td><label for="nom_hop" >Hopital :</label></td>
			    <td><select id="nom_hop" size="1" name="nom_hop" required>
		           <option selected>...   </option>
		           <option>Charles Nicole </option>
		           <option>Habib Bouguatfa</option>
				   <option>Bachir Hamza    </option>
				   <option>Rabta   </option>
				   <option>Pasteur   </option>
				   <option>Raouebi   </option>
                   <option>Amen   </option>
                   <option>Monplaisir   </option>
				</select><br><br></td>
			</tr>
			<tr>
				<td><label for="nom_serv" >Service :</label></td>
			    <td><select id="nom_serv" size="1" name="nom_serv" required>
			       <option selected>...                                 </option>
			       <option>Dentaire                                     </option>
			       <option>Bloc Operatoire                              </option>
			       <option>Chirurgie ambulatoire                        </option>
			       <option>Chirurgie Gynecologie                        </option>
			       <option>Chirurgie urologie                           </option>
			       <option>Chirurgie viscerale,vasculaire,plastique     </option>
			       <option>Chirurgie dentaire                           </option>
			       <option>Neurochirurgie                               </option>
			       <option>Chirurgie orthopedie et traumatologie        </option>
			       <option>Anesthesie,Oncologie,Endoscopie              </option>
			       <option>Endoscopie digestive et bronchique           </option>
			       <option>Imagerie médicale                            </option>
			       <option>Laboratoire                                  </option>
			       <option>Equipe operationnelle d'Hygiene EOH          </option>
			       <option>Oncologie medicale et hospitalisation de Jour</option>
                   <option>Acceuil de Jour Alzheimer                    </option>
                   <option>Maternite                                    </option>
			       <option>Animation                                    </option>
			       <option>Geriatrique                                  </option>
			       <option>Memoire                                      </option>
			       <option>Dietetique                                   </option>
			       <option>Cardiologie                                  </option>
			       <option>Consultation Douleur                         </option>
			       <option>Education therapeutique                      </option>
			       <option>Diabetologie/Endocrinolgie                   </option>
			       <option>Gastroenterologie                            </option>
			       <option>Urgences                                     </option>
			       <option>Pneumologie                                  </option>
			       <option>Neurologie                                   </option>
			       <option>Rhumatologie                                 </option>
			       <option>Nephrolgie                                   </option>
				</select><br><br></td>
            </tr>
            <tr>
				<td><label for="sexe" >Sexe :</label></td>
			    <td><input id="sexe" type="radio" value="Femme" name="sexe">Femme
				<input id="sexe"type="radio" value="Homme" name="sexe">Homme<br><br></td>
			</tr>
			<tr>
				<td><label for="telephone" >Telephone :</label></td>
				<td><input id="telephone" type="number" name="telephone" size="40" required><br><br></td>
			</tr>
			<!-- <tr>
				<td><label for="photo" >Photo :  </label></td>
				<td><input id="photo" type="file" name="photo" size="40"required><br><br></td>
			</tr> -->
			<tr>
				<td><button class="botton" type="submit">Enregistrer</button> <button class="botton" type="reset">Annuler</button></td>
			</tr>
		</table>
    </form>
	</body>
	<form method="POST" action="">
            <p align="center"><a href="home.php">
                <input class="botton" type="button" value="Retour au acceuil" name="B6"></a></p>
        </form>
</html>

<?php
//libérer la variable $rs : 
 mysqli_free_result($rs) ;
 //fermer la connexion  :
 mysqli_close($connection); 
 ?>