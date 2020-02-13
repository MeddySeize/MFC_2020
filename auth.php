<link rel="stylesheet" href="../css/bootstrap.css">
<?php 
require './header.php';
include_once './fonc/fonctions.php';
//Fonctions qui met des notifications liées à la connexion et inscription
checkStatutAuth();
?>
 <head>
   <!--FICHIERS CSS -->
  <link rel="stylesheet" href="css/style2.css">
  <!-- META -->
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--POLICES-->
  <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- FICHIERS JAVASCRIPT-->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script> 
  <!-- TITRE -->
  <title>Connexion/Inscription</title>
 </head>
 
 <body>
 <div class="row">
 <div class="col-xl-2">
 </div>
   <div class="col-xl-4">
   <div class="Htitle">
     <h1 style="text-align: center;">Connexion</h1>
   </div>
   <hr>
      <?php
      include './element/connexion.php';
    ?>
   </div>
   <div class="col-xl-4">
   <div class="Htitle">
     <h1 style="text-align: center;">Inscription</h1>
   </div>
   <hr>
     <?php
      include './element/inscription.php';
     ?> 
   </div>
</div>
</body>