<!DOCTYPE html>
<html>
<?php
    include 'element/header.php';
    require 'fonc/fonctions.php';
    $allFrm = getAllFrm();
    if(isset($_GET['id'])){ //Si une variable id existe (dans l'adresse) alors on appelle la fonction getCategFrm
    $categFrm = getCategFrm($_GET['id']);
    }
?> 
<head>
  <!--FICHIERS CSS -->
  <link rel="stylesheet" href="/css/style2.css">
  <!-- META -->
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- TITRE -->
  <title>Catalogue de formation</title>
</head>

<body>
  <div class="container">
    <a href="accueil.php" style="font-color: black">
     <button type="button" class="btn btn-outline-secondary"> << Revenir </button>
    <a>
  
  <!---------------------------------------------------------------------->
  <!--        Cette partie du code affiche toutes les formations        -->
  <!---------------------------------------------------------------------->
  <div class="col-xl-12 my-auto">
  <?php
  if(isset($_GET['id'])== FALSE){
  ?>
    <div class="Htitle">
        <h1 style="text-align: center">Toutes les formations</h1>
    </div>
    <hr>
  <?php
    foreach($allFrm as $aLine){
  ?>
  <div class="card">
      <h5 class="card-header"><?php echo($aLine['form_nom']); ?></h5>
      <div class="card-body">
        <?php echo($aLine['form_desc']); ?>
      </div>
    </div>
<?php
   }
  }
  else{
?>
  <!---------------------------------------------------------------------->
  <!--Cette partie du code correspond au catalogue filtré par catégorie -->
  <!---------------------------------------------------------------------->
    <?php 
      getnomCateg()
    ?>
  </div>
 <hr>
  <?php
    foreach($categFrm as $cLine){ // affiche chaque formation qu'il y a dans la catégorie correspondante
  ?>
  <div class="col-xl-12 my-auto">
    <div class="card">
      <h5 class="card-header"><?php echo($cLine['form_nom']); ?></h5>
      <div class="card-body">
        <?php echo($cLine['form_desc']); ?>
      </div>
    </div>
  </div>
  <?php
    }
  }
?>
  </div>
</body>
</html>