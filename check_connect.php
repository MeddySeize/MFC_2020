
<?php 
    session_start();

    include 'header.php';
    include 'connexion.php';

    $_SESSION["is_logged"] = FALSE;

    $email = (isset($_POST["mail"]))? $_POST["mail"] : "";
    $password = (isset($_POST["passwd"]))? $_POST["passwd"] : "";

    $cmd = "SELECT count(*) as usr_ID, usr_nom, usr_prenom , usr_email, usr_telephone, usr_passe, nbr FROM Apprenant
    WHERE usr_email = '$email' and usr_passe = '$password' ;";

    $res = $conn->query($cmd);
    $data = $res->fetch();

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