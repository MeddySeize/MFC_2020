<!DOCTYPE html>
<html>
<?php
    include 'header.php';
    require 'fonc/fonctions.php';
    $allFrm = getAllFrm();
    //Si une variable id existe (dans l'adresse) alors on appelle la fonction getCategFrm
    if(isset($_GET['id'])){ 
    $categFrm = getCategFrm($_GET['id']);
    }
?> 
<head>
  <!--FICHIERS CSS -->
  <link rel="stylesheet" href="css/style2.css">
  <!-- META -->
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- TITRE -->
  <title>Catalogue de formation</title>
</head>

<body>
  <div class="container">
  <!---------------------------------------------------------------------->
  <!--        Cette partie du code affiche toutes les formations        -->
  <!---------------------------------------------------------------------->
  <div class="col-xl-12 my-auto">
  <?php
  //Si il n'y a pas d'ID dans l'adresse, alors affiche toutes les formations
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
      <a href="details.php?idFrm=<?php echo($aLine['form_ID'])?>" class="btn btn-primary">Consulter</a>
    </div>
<?php
   }
  }
  //Si l'id est présent dans l'adresse, affiche les formations selon leurs ID de catégorie
  else{
?>
  <!---------------------------------------------------------------------->
  <!--Cette partie du code correspond au catalogue filtré par catégorie -->
  <!---------------------------------------------------------------------->
    <?php 
      getNameCateg()
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
      <a href="details.php?idFrm=<?php echo($cLine['form_ID'])?>" class="btn btn-primary">Consulter</a>
    </div>
  </div>
  <?php
    }
  }
?>
  </div>
</body>
</html>