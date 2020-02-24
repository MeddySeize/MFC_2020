<?php
require('../fonc/db_connect.php');
//Si le Bouton envoi est présent alors
if(isset($_POST['envoi']))
{
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
?>