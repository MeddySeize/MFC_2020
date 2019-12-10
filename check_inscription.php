<?php

include 'header.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$passwd = $_POST['passwd'];

try {
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Apprenant (usr_id, usr_nom, usr_prenom, usr_email, usr_telephone, usr_passe)
    VALUES (NULL, '$nom', '$prenom', '$mail', '$tel', '$passwd')";
    $conn->exec($sql);
    echo "Votre Compte a bien etait cree";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>


