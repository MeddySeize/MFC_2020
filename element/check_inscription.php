<?php
require_once('db_connect.php');

//Si le Bouton envoi est présent alors
if(isset($_POST['envoi']))
{
//assigner les cases du formulaire à une variable
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$passwd = $_POST['passwd'];
}
//Vérifie sur la bdd si il y a déjà une personne avec le même email. 
$req = $db->query('SELECT * from apprenant where usr_email = "'.$_POST['mail'].'"')->rowCount();

//Si il y en a pas alors il entre les informations dans la bdd et met un message positif.
if ( $req == 0)
    {
    $cmd = "INSERT INTO Apprenant (usr_id, usr_nom, usr_prenom, usr_email, usr_telephone, usr_passe)
    VALUES (NULL, '$nom', '$prenom', '$mail', '$tel', '$passwd')";
    $res= $db->query($cmd);
    echo "Votre Compte a bien etait cree";
    }
// Si il existe au moins une personne, il reste sur la page et il met un message d'erreur.
if ($req !=0 and !empty($_POST['mail']))
    {
        echo "<div class='alert'> Cet identifiant est déjà pris. Merci de choisir un autre.</div>";
        //$_SESSION['message'] = "<div class='alert'> Cet identifiant est déjà pris. Merci de choisir un autre.</div>";
        //header("Location:inscription.php? Taken=true");
    }


?>
