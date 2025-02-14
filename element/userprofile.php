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
    foreach($userInf as $uLine){
  ?>
  <!--Changement des informations -->
    <div class="tab-content">
      <div id="profil" class="col-xl-6 tab-pane active">
        <h1>Modifier votre profil</h1>
        <br>
        <form action="element/check_inscription.php" method="post">	
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
        <input type="email" class="form-control" id="mail" name="mail" placeholder="name@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value= <?php echo($uLine['usr_email']);?>>
        </div>
        <div class="form-group">
        <label for="tel">Téléphone</label>
        <input type="tel" class="form-control" id="tel" name="tel" placeholder="06..." pattern="{10,}" value= <?php echo($uLine['usr_telephone']);?>>
        </div>
        <input type="submit" class="btn btn-primary btn-lg btn-block" name="envoi" value = "Enregistrer les modifications">
        </form>
      </div>
      <div id="modifMdp" class="col-xl-6 tab-pane fade">
        <h1>Modifier votre mot de passe</h1>
        <br>
        <form action="">
        <div class="form-group">
        <label for="passwd">Mot de passe</label>
        <input type="password" class="form-control" id="passwd" name="passwd" placeholder="Entrez votre nouveau mot de passe à 8 caractères" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
        </div>  
        <div class="form-group">
        <label for="passwd">Confirmation</label>
        <input type="password" class="form-control" id="conf" name="conf" placeholder="Retapez votre nouveau mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
        </div>
        <input type="submit" class="btn btn-primary btn-lg btn-block" name="envoi" value = "Enregistrer les modifications">
          </form>
        </div>
        <div id="historique" class="container tab-pane fade">
            
        </div>  
    </div>
  <?php
    }
  ?>
