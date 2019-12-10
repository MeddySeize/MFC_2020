<?php 
include 'header.php';
?>
<div class="col-md-12">
  <form action="check_inscription.php" method="post">			
  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" required>
  </div>
  <div class="form-group">
    <label for="prenom">Prenom</label>
    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prenom" required>
  </div>
  <div class="form-group">
    <label for="mail">Email</label>
    <input type="email" class="form-control" id="mail" name="mail" placeholder="name@example.com" required>
  </div>
  <div class="form-group">
    <label for="tel">Telephone</label>
    <input type="tel" class="form-control" id="tel" name="tel" placeholder="Telephone" required>
  </div>
  <div class="form-group">
    <label for="passwd">Mot de passe</label>
    <input type="password" class="form-control" id="passwd" name="passwd" placeholder="Mot de passe" required>
  </div>
  
  <input type="submit" class="btn btn-primary btn-lg btn-block" name="envoi">
  
  </form>

  </div>
