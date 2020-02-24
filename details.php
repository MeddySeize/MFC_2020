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
        <hr> <!--Mettre une ombre-->
      </div>
    </div>
  <div class="row">
  <div class="col-xl-2"></div>
    <div class="col-xl-3">
      <div class="box">
         
      </div>
    </div>
    <div class="col-xl-6">
        <p style="font-size: 20px"><?php echo($dLine['form_desc']); ?></p>
    </div>
  </div>
  </div>
  <?php 
    }
  ?>
</body>
