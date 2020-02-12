<link rel="stylesheet" href="/css/bootstrap.css">
<?php
//Affiche différente barre de navigation selon la personne connectée
    session_start();
    if(isset($_SESSION['type'])){
        if($_SESSION['type'] == 0){ //Statut APPRENANT
            echo('<nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="navbar-collapse collapse w-100 order-1-md-0 dual-collide2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href= "/index.php" class="nav-link">MFC</a>
                    </li>
                    <li class="nav-item active">
                        <a href= "accueil.php" class="nav-link">ACCUEIL</a>
                    </li>
                    <li class="nav-item active">
                        <a href= "catalog.php" class="nav-link">CATALOGUE</a>
                    </li>
                </ul>
            </div>
            <div class="mx-auto order-0">
              <a href="" class="navbar-brand mx-auto"></a>
              <button class="navbar-toggler">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="/profil.php" class="nav-link" style="color: aqua">Bienvenue '.$_SESSION['name'].'!</a>
                    </li>
                    <li class="nav-item active">
                        <a href="element/deconnexion.php" class="nav-link">| Déconnexion |</a>
                    </li>
                </ul>
            </div>
        </nav>
        ');
        }
        elseif($_SESSION['type'] == 1){ //Statut ADMIN
          echo('<nav class="navbar navbar-expand-md navbar-dark bg-dark">
          <div class="navbar-collapse collapse w-100 order-1-md-0 dual-collide2">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                      <a href= "/index.php" class="nav-link">MFC</a>
                  </li>
                  <li class="nav-item active">
                      <a href= "accueil.php" class="nav-link">ACCUEIL</a>
                  </li>
              </ul>
          </div>
          <div class="mx-auto order-0">
            <a href="" class="navbar-brand mx-auto"></a>
            <button class="navbar-toggler">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                      <a href="/profil.php" class="nav-link" style="color: red">ADMIN </a>
                  </li>
                  <li class="nav-item active">
                      <a href="element/deconnexion.php" class="nav-link">| Déconnexion |</a>
                  </li>
              </ul>
          </div>
      </nav>
      ');
        }
    }
    else{ // PAR DEFAUT
        echo('<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-collapse collapse w-100 order-1-md-0 dual-collide2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href= "/index.php" class="nav-link">MFC</a>
                </li>
                <li class="nav-item active">
                    <a href= "accueil.php" class="nav-link">ACCUEIL</a>
                </li>
            </ul>
        </div>
        <div class="mx-auto order-0">
          <a href="" class="navbar-brand mx-auto"></a>
          <button class="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="/auth.php" class="nav-link">CONNEXION/INSCRIPTION</a>
                </li>
            </ul>
        </div>
    </nav>');
    }
?>
