<?php

session_start();
if (!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<html>
<head>
    <title> Home Page </title>
    <link rel="stylesheet" type="text/css" a href="css\style.css">
    <link rel="stylesheet" href="css/apparence.css">     
    <link rel="stylesheet" a href="css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
</head>
<body >
    <div class="container">
        <a href="logout.php"  class="float-right" >LOGOUT </a>
        <h1> Welcome  <?php echo $_SESSION['username'] ; ?>      </h1> 
        <br><br><br>
        <a href="choix1.html"><button type="submit" >Afficher </button></a>
        <a href="choix2.html"><button type="submit" >Inscrit  </button></a>
        <a href="choix3.html"> <button type="submit" >Rechercher </button></a>


    </div>
   

</body>
</html>