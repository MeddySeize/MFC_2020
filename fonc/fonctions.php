<?php
                                /**************************************************/
                               /* Fonctions Liées à la connexion et l'inscription*/
                              /**************************************************/

//Cette fonction permet d'afficher des notifications selon les entrée de l'utilisateur
function checkStatutAuth(){
//Si l'utilisateur utilise un email déjà existant dans la base de données, il mettra un message d'erreur:
if(isset($_GET['taken'])==true)
{
  $mess = "<div class='alert'> Cet e-mail est déjà pris. Merci de choisir un autre.</div>";
  echo $mess;
}
//Si la confirmation de mot de passe n'est pas correcte, elle affiche un message d'erreur:
elseif(isset($_GET['badConf'])==true)
{
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


                                /**************************************************/
                               /*   Fonctions Liées au catalogue de formation    */
                              /**************************************************/
//Cette fonction recherche la categ selon la page et les formations validées dans la BDD. Puis les mets dans un tableau. 
 function getFormation($idCateg){
    require($_SERVER['DOCUMENT_ROOT'].'/element/db_connect.php');
    $cmd = "SELECT * FROM formation WHERE form_cat = $idCateg AND form_statut = 1";
    $res = $db->query($cmd);
    $tableFrm = $res->fetchAll();
    return $tableFrm;
 }             
 // Affiche le titre de la catégorie selon l'idée de la page / à simplifier:
 function getnomCateg(){
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


