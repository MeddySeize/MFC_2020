<?php 
 //Creation de la session
    session_start();
//Ajout des infos de la base de donnée
    require_once '../fonc/db_connect.php';
    //Par défaut, il y a pas de personne connectée.
    $_SESSION["logged"] = FALSE;
//Désigner les éléments du formulaire de connexion. ici "conMail" et "conPasswd" sont les cases à remplir dans le formulaire
    $email = (isset($_POST["conMail"]))? $_POST["conMail"] : "";
    $password = (isset($_POST["conPasswd"]))? $_POST["conPasswd"] : "";
//"nbr" est booléen. Si les identifiants existent, Il sera à 1. sinon 0.
    $cmd = "SELECT count(*) as nbr,usr_ID, usr_nom, usr_prenom , usr_email, usr_telephone, usr_passe, usr_type FROM Apprenant
    WHERE usr_email = '$email' and usr_passe = '$password' ;";
//Si nbr est à 1 alors on assigne les infos de la base de données au compte de l'utilisateur
    $res = $db->query($cmd);
    $data = $res->fetch();
//et on le redirige vers l'accueil
    if ($data['nbr'])
    {
      $_SESSION['logged'] = true;
      $_SESSION['id'] = $data['usr_ID'];
      $_SESSION['type'] = $data['usr_type'];
      $_SESSION['name'] = $data['usr_prenom'];
        header("Location:../accueil.php");
    }
//Sinon on lui met un message d'erreur.
    else
    {
        header("Location:../auth.php?badID=true");
    }

?>