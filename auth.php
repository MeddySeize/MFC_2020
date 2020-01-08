<?php 
include 'element/header.php';
?>
 <head>
   <!--FICHIERS CSS -->
  <link rel="stylesheet" href="/css/style2.css">
  <!-- META -->
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--POLICES-->
  <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- FICHIERS JAVASCRIPT -->
  <script type="text/javascript" src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- TITRE -->
  <title>Maison de la Formation Continue</title>
 </head>
 <body>
 <div class="row">
   <div class="col-xl-5">
    <?php
      include 'element/connexion.php';
    ?> 
   </div>
   <div class="col-xl-5">
     <?php
      include 'element/inscription.php';
     ?> 
   </div>
</div>
</body>