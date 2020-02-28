<form action="fonc/fonctions.php" method="post">	
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
    <input type="email" class="form-control" id="mail" name="mail" placeholder="name@example.com" pattern="[A-Za-z0-9._%+-]{3,}@[a-zA-Z]{3,}([.]{1}[a-zA-Z]{2,}|[.]{1}[a-zA-Z]{2,}[.]{1}[a-zA-Z]{2,})" required>
  </div>
  <div class="form-group">
    <label for="tel">Téléphone</label>
    <input type="tel" class="form-control" id="tel" name="tel" placeholder="06..." pattern="{10,}" required>
  </div>
  <div class="form-group">
    <label for="passwd">Mot de passe</label>
    <input type="password" class="form-control" id="passwd" name="passwd" placeholder="Entrez votre mot de passe à 8 caractères" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
  </div>  
  <div class="form-group">
    <label for="passwd">Confirmation</label>
    <input type="password" class="form-control" id="conf" name="conf" placeholder="Retapez votre mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
  </div>
  <input type="submit" class="btn btn-primary btn-lg btn-block" name="envoiInsc" value = "S'inscrire">
</form>
