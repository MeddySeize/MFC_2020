<?php 
 //connexion
    session_start();
    include('db_connect.php');
//Ajout des infos de la base de donnée
    $_SESSION["is_logged"] = FALSE;
//Par défaut, il y a pas de personne connectée
    $email = (isset($_POST["mail"]))? $_POST["mail"] : "";
    $password = (isset($_POST["passwd"]))? $_POST["passwd"] : "";
//Désigner les éléments du formulaire de connexion. ici "UtiID" et "Utimdp" sont les cases à remplir dans le formulaire
//"nbr" est booléen. Si les identifiants existent, Il sera à 1. sinon 0.
    $cmd = "SELECT count(*) as nbr,usr_ID, usr_nom, usr_prenom , usr_email, usr_telephone, usr_passe FROM Apprenant
    WHERE usr_email = '$email' and usr_passe = '$password' ;";
//Si nbr est à 1 alors on assigne les infos de la base de données au compte de l'utilisateur
    $res = $db->query($cmd);
    $data = $res->fetch();
//et on le redirige vers l'accueil
    if ($data['nbr'])
    {
        $_SESSION["is_logged"] = true;
       
        echo "Vous êtes connecté";
    }
//Sinon on lui met un message d'erreur.
    else
    {
        echo "vous n'êtes pas connecté";
    }

?>