<?php
//La barre de nav est au dessus de la balise head car elle contient bootstrap
//la mettre en dessous du head transforme toute la page en bootstrap, ce qui dérègle le front
    include 'header.php';
?>
 <head>
   <!--FICHIERS CSS -->
  <link rel="stylesheet" href="css/style.css">
  
  <!-- META -->
  <meta charset="UTF-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- FICHIERS JAVASCRIPT -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- TITRE -->
  <title>Maison de la Formation Continue</title>
 </head>

 <body>
    <!--Représente chaque compartiment de la page Ex: Bienvenue sur MFC, MFC,Nous Contacter-->
    <section id="Accueil">
     <h1>Bienvenue sur MFC</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit felis eget sapien vehicula convallis.
    Nullam tincidunt risus a felis tincidunt. </p>
       <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></p>
       <a href="accueil.php" class="button">Voir nos Formations</a>
     </section>
     <section id="Info">
     <h1>MFC, Formation pour tous</h1>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit felis eget sapien vehicula convallis.
    Nullam tincidunt risus a felis tincidunt, nec consequat eros ultricies. Curabitur sit amet maximus diam</p>
    <a href="PageFormation.php" class="button">En savoir plus</a>
    </section>
    <section id="Contact">
    <h1>Nous Contacter</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit felis eget sapien vehicula convallis.
    Nullam tincidunt risus a felis tincidunt, nec consequat eros ultricies. Curabitur sit amet maximus diam</p>
    </section>
 </body>
