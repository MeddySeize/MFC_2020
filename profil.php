<?php
 include 'header.php';
 require 'fonc/fonctions.php';
 $userInfo = getUser($_SESSION['id']);
 updateUserinfo($_SESSION['id']);
 updateUserPsswd($_SESSION['id']);
 notification();

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
        <a class="nav-link"  data-toggle="tab" href="#modifMdp">Modifier votre mot de passe</a>
        </li> 
    </ul>
 <!--Panneau de la navigation-->
 <?php
    foreach($userInfo as $uLine){
  ?>
  <!--Changement des informations -->
    <div class="tab-content">
      <div id="profil" class="col-xl-6 tab-pane active">
        <h1>Modifier votre profil</h1>
        <br>
        <form action="" method="post">	
          <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom" value= <?php echo($uLine['usr_prenom']);?>>
         </div>		
          <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" value= <?php echo($uLine['usr_nom']);?>>
          </div>
        <div class="form-group">
        <label for="mail">Email</label>
        <input type="email" class="form-control" id="mail" name="mail" placeholder="Votrenom.prenom@exemple.com" pattern="[A-Za-z0-9._%+-]{3,}@[a-zA-Z]{3,}([.]{1}[a-zA-Z]{2,}|[.]{1}[a-zA-Z]{2,}[.]{1}[a-zA-Z]{2,})" value= <?php echo($uLine['usr_email']);?>>
        </div>
        <div class="form-group">
        <label for="tel">Téléphone</label>
        <input type="tel" class="form-control" id="tel" name="tel" placeholder="06..." pattern="{10,}" value= <?php echo($uLine['usr_telephone']);?>>
        </div>
        <input type="submit" class="btn btn-primary btn-lg btn-block" name="majInfo" value = "Enregistrer les modifications">
        </form>
      </div>
      <div id="modifMdp" class="col-xl-6 tab-pane fade">
        <h1>Modifier votre mot de passe</h1>
        <br>
        <form action="" method="post">
          <div class="form-group">
            <label for="passwd">Mot de passe actuel</label>
            <input type="password" class="form-control" id="passwd" name="passwd"  placeholder="Entrez votre mot de passe actuel" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
          </div>
          <div class="form-group">
            <label for="newPasswd">Nouveau mot de passe</label>
            <input type="password" class="form-control" id="newPasswd" name="newPasswd" placeholder="Entrez votre nouveau mot de passe à 8 caractères" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
          </div>  
          <div class="form-group">
            <label for="confPasswd">Confirmation</label>
            <input type="password" class="form-control" id="conf" name="conf" placeholder="Retapez votre nouveau mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
          </div>
          <input type="submit" class="btn btn-primary btn-lg btn-block" name="majPw" value = "Enregistrer les modifications">
        </form>
      </div>
    </div>
  <?php
    }
  ?>  
  </div>
 </body>