<?php 
include 'header.php';
?>
<body>
<div class="row">
 <div class="col-md-4"></div>
  <div class="col-md-9">
  <form action="check_connect.php" method="post">			
  <div class="form-group">
    <label for="mail">Email</label>
    <input type="text" class="form-control" id="mail" name="mail" placeholder="Mail">
  </div>
  <div class="form-group">
    <label for="passwd">Mot de passe</label>
    <input type="password" class="form-control" id="passwd" name="passwd" placeholder="Mot de passe">
  </div>
  <button type="submit" class="btn btn-default">Connexion</button>
  </form>
  <br><br>
  <li><a href="inscription.php"> Creer un compte</a></li>
  </div>
</div>

