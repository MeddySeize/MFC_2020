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
    $cmd = "SELECT * FROM Apprenant WHERE usr_email = ? AND usr_passe = ? ;";
//Si nbr est à 1 alors on assigne les infos de la base de données au compte de l'utilisateur
    $res = $db->prepare($cmd);
    $res->execute(array($email, $password));
    $cnt = $res->rowCount();
    
//et on le redirige vers l'accueil
    if ($cnt == 1)
    {
      $data = $res->fetch();
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