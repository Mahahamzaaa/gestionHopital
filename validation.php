<?php 
session_start();

 
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'gestionhopitaux');
 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from utilisateur where username='$uname' && password='$password' limit 1";
    
    $result=mysqli_query($con,$sql);
    $num =mysqli_num_rows($result);
    
    if( $num==1){
        $_SESSION['username']= $uname ;
        header('location:home.php');
    }
    else{
       // header('location:login.php'); 
        echo("Veuillez inscrire à la site");
      
    }
        
}
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