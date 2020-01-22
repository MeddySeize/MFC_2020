<!DOCTYPE html>
<html>
<?php
    include 'element/header.php';
    require 'fonc/fonctions.php';
    $Formation = getFormation($_GET['id']);
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
  

  <div class="col-xl-12 my-auto">
    <?php 
      getnomCateg()
    ?>
  </div>
 <hr>
  <?php
    foreach($Formation as $line){ // affiche chaque formation qu'il y a dans la catégorie correspondante
  ?>
  <div class="col-xl-12 my-auto">
    <!-- Mettre Php ici-->
    <div class="card">
      <h5 class="card-header"><?php echo($line['form_nom']); ?></h5>
      <div class="card-body">
        <?php echo($line['form_desc']); ?>
      </div>
    </div>
  </div>
  <?php
  }
?>
  </div>
</body>