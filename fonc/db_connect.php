<?php 

$user = "root";
$pass = "";
$dbs = new PDO('mysql:host=localhost;dbname="mfc";charset=utf8', $db_user, $db_mdp);
//Permet d'avoir plus d'info si il y a une erreur:
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>