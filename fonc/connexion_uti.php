<?php
 //connexion
 session_start();
 //Ajout des infos de la base de donnée
 include('connexion_db.php');
 //Par défaut, il y a pas de personne connectée
 $_SESSION["is_logged"] = FALSE;
 //Désigner les éléments du formulaire de connexion. ici "UtiID" et "Utimdp" sont les cases à remplir dans le formulaire
 $IdUti = (isset($_POST["UtiID"]))? $_POST["UtiID"] : "";
 $MPUti = (isset($_POST["Utimdp"]))? $_POST["Utimdp"] : "";
//Requête qui recherche une personne qui à un ID et MDP correspondant à ce que l'utilisateur à rentré dans les cases dans la bdd
//"nbr" est booléen. Si les identifiants existent, Il sera à 1. sinon 0.
 $cmd = "SELECT count(*) as nbr, nomUti, prenomUti , id_utilisateur FROM utilisateur
 WHERE identUti = '$IdUti' and
 mdpUti = '$MPUti' ;";
//On execute la requête
 $res = $db->query($cmd);
 $data = $res->fetch();

//Si nbr est à 1 alors on assigne les infos de la base de données au compte de l'utilisateur
 if ($data['nbr'])
 {
    $_SESSION["is_logged"] = true;
    $_SESSION["id"] = $data['id_utilisateur'];
    $_SESSION["type"] = "user";
    $_SESSION['name'] = $data['prenomUti'];
//et on le redirige vers l'accueil
    header("location: shopping.php?frm=0");
}
//Sinon on lui met un message d'erreur.
else
{
  header("Location:Profil.php?BadID=True");
}


 ?>