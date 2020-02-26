<?php
require('db_connect.php');
                                /**************************************************/
                               /* Fonctions Liées à la connexion et l'inscription*/
                              /**************************************************/

//Cette fonction permet d'afficher des notifications selon les entrée de l'utilisateur
function checkStatusAuth(){
//Si l'utilisateur utilise un email déjà existant dans la base de données, il mettra un message d'erreur:
  if(isset($_GET['taken'])==true){
  $mess = "<div class='alert'> Cet e-mail est déjà pris. Merci de choisir un autre.</div>";
  echo $mess;
  }
//Si la confirmation de mot de passe n'est pas correcte, elle affiche un message d'erreur:
  elseif(isset($_GET['badConf'])==true){
  $mess ="<div class='alert'> La confirmation du mot de passe est incorrecte. Merci de réessayer.</div>";
  echo $mess;
  }
//Si le compte n'existe pas et la confirmation est correcte , il crée le compte et affiche une notification:
  elseif(isset($_GET['created'])==true){
  $mess ="<div class='goodalert'>Vous êtes inscrit! Vous pouvez maintenant vous connecter.</div>";
  echo $mess;
  }
//Si les identifiants sont incorrectes, afficher un message d'erreur:
elseif(isset($_GET['badID'])==true){
  $mess ="<div class='alert'>L'adresse e-mail ou le mot de passe est incorrect. Merci de réessayer</div>";
  echo $mess;
  }
}
//=========================================================================================================================================================================
//L'action du formulaire d'inscription:
function inscUti(){
require('db_connect.php');
//Si le Bouton envoi est présent alors
if(isset($_POST['envoiInsc']))
{
//assigner les cases du formulaire à une variable
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$mail = htmlspecialchars($_POST['mail']);
$tel = htmlspecialchars($_POST['tel']);
$passwd = htmlspecialchars($_POST['passwd']);
$conf = htmlspecialchars($_POST['conf']);
}
//Vérifie sur la bdd si il y a déjà une personne avec le même email. 
$req = $db->query('SELECT * from apprenant where usr_email = "'.$_POST['mail'].'"')->rowCount();

//Si il y en a pas alors il entre les informations dans la bdd et met un message positif.
if ( $req == 0)
    {
  
    $cmd = "INSERT INTO Apprenant (usr_id, usr_nom, usr_prenom, usr_email, usr_telephone, usr_passe, usr_type)
    VALUES (NULL, '$nom', '$prenom', '$mail', '$tel', '$passwd', 0)";
    $res= $db->query($cmd);
    header("Location:../auth.php?created=true");
    }
// Si il existe au moins une personne, il reste sur la page et il met un message d'erreur. 
//TODO: Régler les conditions, 
if ($req !=0 and !empty($_POST['mail']))
    {
        header("Location:../auth.php?taken=true");
    }

    if ($req == 0 and $_POST['conf'] != $_POST['passwd'])
    {
        header("Location:../auth.php?badConf=true");
    }
}
//=========================================================================================================================================================================
//L'action du formulaire de connexion:
function conUti(){
//Creation de la session
session_start();
//Ajout des infos de la base de donnée
require('db_connect.php');
//Par défaut, il y a pas de personne connectée.
  $_SESSION["logged"] = FALSE;
//Désigner les éléments du formulaire de connexion. ici "conMail" et "conPasswd" sont les cases à remplir dans le formulaire
  $email = htmlspecialchars(isset($_POST["conMail"]))? $_POST["conMail"] : "";
  $password = htmlspecialchars(isset($_POST["conPasswd"]))? $_POST["conPasswd"] : "";
//"nbr" est booléen. Si les identifiants existent, Il sera à 1. sinon 0.
  $cmd = "SELECT * FROM Apprenant WHERE usr_email = ? AND usr_passe = ? ;";
//Si nbr est à 1 alors on assigne les infos de la base de données au compte de l'utilisateur
  $res = $db->prepare($cmd);
  $res->execute(array($email, $password));
  $cnt = $res->rowCount(); 
  if ($cnt == 1)
  {
    $data = $res->fetch();
    $_SESSION['logged'] = true;
    $_SESSION['id'] = $data['usr_ID'];
    $_SESSION['type'] = $data['usr_type'];
    $_SESSION['name'] = $data['usr_prenom'];
  //et on le redirige vers l'accueil
    header("Location:../accueil.php");
  }
//Sinon on lui met un message d'erreur.
  else
  {
    header("Location:../auth.php?badID=true");
  }
}
function conAdm(){
  //Creation de la session
  session_unset();
  session_start();
  //Ajout des infos de la base de donnée
  require('db_connect.php');
  //Par défaut, il y a pas de personne connectée.
    $_SESSION["logged"] = FALSE;
  //Désigner les éléments du formulaire de connexion. ici "conMail" et "conPasswd" sont les cases à remplir dans le formulaire
    $login = htmlspecialchars(isset($_POST["loginAdm"]))? $_POST["loginAdm"] : "";
    $password = htmlspecialchars(isset($_POST["passwdAdm"]))? $_POST["passwdAdm"] : "";
  //"nbr" est booléen. Si les identifiants existent, Il sera à 1. sinon 0.
    $cmd = "SELECT * FROM gestionnaire WHERE gest_login = ? AND gest_passe = ? ;";
  //Si nbr est à 1 alors on assigne les infos de la base de données au compte de l'utilisateur
    $res = $db->prepare($cmd);
    $res->execute(array($login, $password));
    $cnt = $res->rowCount(); 
    if ($cnt == 1)
    {
      $data = $res->fetch();
      $_SESSION['logged'] = true;
      $_SESSION['admId'] = $data['gest_ID'];
      $_SESSION['admType'] = $data['gest_type'];
      $_SESSION['admPseudo'] = $data['gest_login'];
      if($_SESSION['admType'] == 0){
      header("Location:../adminOffice.php?admFrm=true");
      }
    }
  //Sinon on lui met un message d'erreur.
  else
  {
    header("Location:../adminOffice.php?badID=true");
  }
}
if(isset($_POST['envoiCon'])){
  conUti();
}
if(isset($_POST['envoiInsc'])){
  inscUti();
}
if(isset($_POST['envoiAdm'])){
  conAdm();
}
//=========================================================================================================================================================================

                                /**************************************************/
                               /*   Fonctions Liées au catalogue de formation    */
                              /**************************************************/

//Cette fonction recherche la categ selon la page et les formations validées dans la BDD. Puis les mets dans un tableau. 
 function getCategFrm($idCateg){
   require('db_connect.php');
    $cmd = "SELECT * FROM formation WHERE form_cat = $idCateg AND form_statut = 1";
    $res = $db->query($cmd);
    $categFrm = $res->fetchAll();
    return $categFrm;
 }            
//========================================================================================================================================================================= 
//Cette fonction récupère toute les formations qui ont été validée dans la BDD. Puis le stock dans un tableau
 function getAllFrm(){
  require('db_connect.php');
  $cmd = "SELECT * FROM formation WHERE form_statut = 1";
    $res = $db->query($cmd);
    $allFrm = $res->fetchAll();
    return $allFrm;
 }
 //=========================================================================================================================================================================
 // Affiche le titre de la catégorie selon l'idée de la page / à simplifier:
 function getnameCateg(){
   if($_GET['id']== 4){
    echo('<div class="Htitle">
          <h1 style="text-align: center; color: green">Réseau</h1>
        </div>
      ');
   }
   if($_GET['id']== 5){
    echo('<div class="Htitle">
          <h1 style="text-align: center; color: red">Développement</h1>
        </div>
      ');
   }
   if($_GET['id']== 6){
    echo('<div class="Htitle">
          <h1 style="text-align: center; color: blue">Bureautique</h1>
        </div>
      ');
   }
 }
 //=========================================================================================================================================================================
//Sélectionne les dernières formation créées et les affiches sur l'accueil
 function getLastFrm(){
  require('db_connect.php');
  $cmd = "SELECT * FROM `formation` ORDER BY form_ID DESC LIMIT 2";
  $res = $db->query($cmd);
  $lastFrm = $res->fetchall();
  return $lastFrm;
 }
//=========================================================================================================================================================================
 function getFrmDetails($idFrm){
  require('db_connect.php');
  $cmd = "SELECT * FROM `formation` WHERE form_ID = $idFrm";
  $res = $db->query($cmd);
  $lastFrm = $res->fetchall();
  return $lastFrm;
 }
//=========================================================================================================================================================================
                                /**************************************************/
                               /*  Fonctions Liées a la gestion des utilisateurs */
                              /**************************************************/
 
//Cherche les informations de l'utilisateur connecté et les mets dans un tableau
function getUser($IdUtilisateur){
  require('db_connect.php');
  $cmd = "SELECT usr_ID, usr_nom, usr_prenom, usr_email, usr_telephone FROM apprenant WHERE usr_ID = $IdUtilisateur";
  $res = $db->query($cmd);
  $userInf = $res->fetchAll();
  return $userInf;
}

function addFrm(){
require('../fonc/db_connect.php');
//Si le Bouton envoi est présent alors
if(isset($_POST['envoi'])){
//assigner les cases du formulaire à une variable
$nomForma = $_POST['nomForma'];
$categForma = $_POST['categForma'];
$desc = $_POST['desc'];
$prixForma = $_POST['prixForma'];
$nivForma = $_POST['nivForma'];
}
$cmd = "INSERT INTO formation(form_ID,form_nom, form_cat, form_desc, form_prix,form_niveau,form_statut)
VALUES(NULL, '$nomForma','$categForma','$desc','$prixForma','$nivForma', 0)";
$res=$db->query($cmd);

header("Location:../profil.php?FormCrea=true");
}