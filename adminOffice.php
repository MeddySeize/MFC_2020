<?php 
  include './fonc/fonctions.php';
  //Fonctions qui met des notifications liées à la connexion et inscription
  notification();
?>
<!DOCTYPE html>
<html>
<head>
   <!--FICHIERS CSS -->
  <link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="./css/bootstrap.css">
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

<body class="text-center">
<div class="Htitle">
     <h1 style="text-align: center;">Back Office</h1>
</div>
<?php
if(isset($_SESSION['logged']) != true){
  include './element/connexionAdm.php';
}
elseif(isset($_GET['admFrm']) == true){
  include './element/inscription.php';
}
?>
</div>
  </div>
</body>
</html>