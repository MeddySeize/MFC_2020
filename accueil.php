<!DOCTYPE html>
<html>
<?php
 include 'header.php';
 require 'fonc/fonctions.php';
 $lastFrm = getLastFrm();
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
  <!-- FICHIERS JAVASCRIPT -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- TITRE -->
  <title>Maison de la Formation Continue</title>
 </head>

 <body>
<!--Inclusion de la navbar -->
 <div class="container">
     <div class="row h-100">
         <div class="col-xl-12 my-auto">
            <div class="Htitle">
                <h1 style="text-align: center;">Bienvenue!</h1>
            </div>
         </div>
     </div>
     <div class="row">
         <div class="box1">
         <a href = "catalog.php?id=5">
             <div class="content">
                <h1>Dev</h1>
             </div>
        </a>
         </div>

         <div class="box2" >
         <a href = "catalog.php?id=6">
            <div class="content">
                <h1>Bureau</h1>
            </div>
        </a>
         </div>

         <div class="box3">
         <a href = "catalog.php?id=4">
            <div class="content">
                <h1>Réseau</h1>
            </div>
        </a>
         </div>
     </div>
     <div class="col-xl-12 my-auto">
           <div class="Htitle">
              <h2 style="text-align: center;">Nos dernières formations</h1>
            </div>
    <?php
      foreach($lastFrm as $lLine){
    ?>
    <div class="card">
      <h5 class="card-header"><?php echo($lLine['form_nom']);?></h5>
        <div class="card-body">
          <?php echo($lLine['form_desc']); ?>
        </div>   
        <a href="details.php?idFrm=<?php echo($lLine['form_ID'])?>" class="btn btn-primary">Consulter</a>
    </div>
    <?php
      }
    ?>
    </div>
    </div>
 </body>
