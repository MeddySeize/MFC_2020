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
    <p>Avec une équipe de 80 formateurs et consultants à votre service</p>
       <p><strong>Quelle que soit votre ambition, MFC peut vous aider à bâtir votre avenir.</strong></p>
       <a href="accueil.php" class="button">Voir nos Formations</a>
     </section>
     <section id="Info">
     <h1>MFC, la voie de la connaissance</h1>
     <p>MFC est une plateforme en ligne offrant des parcours diplômants et professionnalisants à plus de trois millions d'étudiants  à travers le monde.</p>
    <a href="PageFormation.php" class="button">En savoir plus</a>
    </section>
    <section id="Contact">
    <h1>Nous Contacter</h1>
    <p>MFC met tout en œuvre pour répondre à vos questions et satisfaire vos demandes.</p>
    <a href="" class="button">Contact</a>
    </section>
 </body>
