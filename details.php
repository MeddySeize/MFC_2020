<?php
    include 'header.php';
    require 'fonc/fonctions.php';
    if(isset($_GET['idFrm'])){ 
      $detailFrm = getFrmDetails($_GET['idFrm']);
      }
?>
<head>
  <!--FICHIERS CSS -->
  <link rel="stylesheet" href="css/style2.css">
  <!-- META -->
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- TITRE -->
  <title>Détails de la formation</title>
</head>
<body>
<?php
    foreach($detailFrm as $dLine){
  ?>
  <div class="container">
    <div class="col-xl-12 center">
      <div class="Htitle">
        <h1 style="text-align: center;"><?php echo($dLine['form_nom']); ?></h1>
        <hr>
      </div>
    </div>
  <div class="row">
  <div class="col-xl-2"></div> <!--Ajuster/equilibrer la page-->
    <div class="col-xl-3">
      <div class="box">
         <!-- Pour mettre une image -->
      </div>
    </div>
    <div class="col-xl-6">
        <p style="font-size: 20px"><?php echo($dLine['form_desc']); ?></p>
        <p style="font-size: 20px">Lieu: <b><?php echo($dLine['form_ville'])?></b></p>
        <p style="font-size: 20px">Niveau: <b><?php echo($dLine['form_niveau'])?></b></p>
        <p style="font-size: 40px">Prix: <b><?php echo($dLine['form_prix'])?>€</b></p>
    </div>
    
       <input type="submit"  class="btn btn-primary btn-lg btn-block" name="envoiFormInsc" value = "S'inscrire">
  </div>
  </div>
  <?php 
    }
  ?>
</body>
