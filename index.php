<!DOCTYPE html>
<html>
 <head>
   <!--FICHIERS CSS -->
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/style.css">
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
     <!--La navigation qui est collée en de la page. elle est constituée de 4 éléments: Accueil, A propos, Insc/Co,Contact.
    Elle permet de rendre à la section demandée.-->

    <nav class="navbar navbar-expand-md navbar-dark bg-transparent">
      <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collide2">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a href="#" class="nav-link">LOGO</a>
          </li>
        </ul>
      </div>
      <div class="mx-auto order-0">
        <a href="" class="navbar-brand mx-auto"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="connexion.php" class="nav-link">Connexion</a>
          </li>
          <li class="nav-item active">
            <a href="inscription.php" class="nav-link">Inscription</a>
          </li>

        </ul>
      </div>
    </nav>
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
</html>