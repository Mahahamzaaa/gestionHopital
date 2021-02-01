<?php
//connexion à la base:
session_start();

$connection= mysqli_connect('localhost','root','') or die(mysqli_error($connection));
//sélectionner la base de données hopital :
mysqli_select_db($connection,'Gestionhopitaux')or die(mysqli_error());

?>