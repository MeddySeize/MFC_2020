
<?php
 include 'element/header.php';
 require 'fonc/fonctions.php';
 $userInf = getUser($_SESSION['id']);
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
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- TITRE -->
  <title>Maison de la Formation Continue</title>
 </head>

 <body>
   <div class="col-xl-12">
   <div class="Htitle">
        <h1 style="text-align: center;">Que voulez vous faire, <?php echo($_SESSION['name'])?> ? </h1>
    </div>
  </div>
  <div class="col-xl-12">
 <!--onglet de navigation-->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#profil">Vos informations personnelles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#historique">Historique des paiements</a>
        </li>
    </ul>

    <div class="tab-content">
      <div id="profil" class="col-xl-6 tab-pane active">
        <h1>Modifier votre profil</h1>
        <br>
        <form action="element/check_inscription.php" method="post">	
          <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom" required>
         </div>		
          <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" required>
          </div>
        <div class="form-group">
        <label for="mail">Email</label>
        <input type="email" class="form-control" id="mail" name="mail" placeholder="name@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
        </div>
        <div class="form-group">
        <label for="tel">Téléphone</label>
        <input type="tel" class="form-control" id="tel" name="tel" placeholder="06..." pattern="{10,}" required>
        </div>
        <input type="submit" class="btn btn-primary btn-lg btn-block" name="envoi" value = "Enregistrer les modifications">
        </form>
      </div>
        <div id="historique" class="container tab-pane fade">
            <h3>home</h3>
            <p>Hello</p>
        </div>
        
    </div>
  </div>
 </body>