<?php
    /**************************************************/
    /* Fonctions Liées à la connexion et l'inscription */
    /**************************************************/

//Cette fonction permet d'afficher des notifications selon les entrée de l'utilisateur 
function checkStatutAuth(){
//Si l'utilisateur utilise un email déjà existant dans la base de données, il mettra un message d'erreur:
if(isset($_GET['taken'])==true)
{
  $mess = "<div class='alert'> Cet e-mail est déjà pris. Merci de choisir un autre.</div>";
  echo $mess;
}
//Si la confirmation de mot de passe n'est pas correcte, elle affiche une notification d'erreur:
elseif(isset($_GET['badConf'])==true)
{
  $mess ="<div class='alert'> La confirmation est incorrecte.</div>";
  echo $mess;
}
//Si le compte n'existe pas et la confirmation est correcte , il crée le compte et affiche une notification:
elseif(isset($_GET['created'])==true){
  $mess ="<div class='goodalert'>Vous êtes inscrit! Vous pouvez maintenant vous connecter.</div>";
  echo $mess;
}
}

?>