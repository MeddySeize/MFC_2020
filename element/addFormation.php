<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#profil">Créer une formation</a>
 </li>
</ul>
<div class="tab-content">
      <div id="profil" class="col-xl-6 tab-pane active">
        <h1>Nouvelle formation?</h1>
        <br>
        <form action="element/addFormation.php" method="post">	
          <div class="form-group">
            <label for="prenom">Nom de la formation</label>
            <input type="text" class="form-control" id="nomForma" name="nomForma"placeholder="PHP, Ruby, Excel....">
         </div>	
         <div class="form-group">
            <label for="prenom">Catégorie de la formation</label>
            <input type="number" class="form-control" id="categForma" name="categForma" min="4" max="6" placeholder="4 pour réseau, 5 pour développement, 6 pour bureautique">
         </div>	
          <div class="form-group">
            <label for="nom">description de la formation</label>
            <input type="text" class="form-control" id="desc" name="desc" placeholder="votre description ici">
          </div>
        <div class="form-group">
        <label for="prixForma">Prix de la formation</label>
        <input type="number" class="form-control" id="prixForma" name="prixForma" min="1000" max="5000" placeholder="Votre prix">
        </div>
        <div class="form-group">
        <label for="tel">Niveau de la formation</label>
        <input type="text" class="form-control" id="nivForma" name="nivForma" placeholder="Débutant intermédiaire">
        </div>
        <input type="submit" class="btn btn-primary btn-lg btn-block" name="envoi" value = "Créer la formation">
        </form>
      </div>
</div>