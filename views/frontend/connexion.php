<?php 
require '../../header.php';
?>
  <link rel="stylesheet" href="../../src/css/connexion.css">
  <section class="connexion" style="background-color: #FEF5EA;">

  <div class="title-connexion">
      <h3>En vous connectant, vous 
        pourrez liker, partager ou 
        commenter notre contenu
        et intéragir avec les autres
        utilisateurs.</h3>
    </div>

    

<!-- Bootstrap form to create a new statut -->

            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/security/connexion.php' ?>" method="post">
            <div class="div-formulaire">
                <div class="form-group email">
                    <label for="pseudoMemb" class="col-form-label">Pseudo:</label>
                    <input id="pseudoMemb" name="pseudoMemb" class="form-control" type="text" autofocus="autofocus" />
                </div>
                <div class="form-group motdepasse col-auto">
                    <label for="passMemb" class="col-form-label">Mot de passe :</label>
                    <input id="passMemb" name="passMemb" class="form-control" type="password" autofocus="autofocus" aria-describedby="passwordHelp" />
                    <div class="condition-mdp">
                        <button type="button" id="afficher"  class="afficher-mdp">Afficher le mot de passe</button>
                        <span id="passwordHelp" class="form-text">
                        La longueur doit être comprise entre 8 et 20 caractères.
                        </span>
                    </div>
                </div>
            </div>
                <div class="valid form-check">
                <input class="form-check-input" type="checkbox" value="" id="cookies">
                <label class="form-check-label" for="cookies">
                    Se souvenir de moi
                </label>
                </div>
                <br />
                <div class="div-button">
                    <div class="div-connexion">
                        <div class="div-no-compte">
                        <button type="submit" class="button-connexion">Connexion</button>
                        <p class="link-opacity-100">Pas de compte ?</p>
                        </div>
                        <button type="submit" class="button-inscription">Inscription</button>
                    </div>
                </div>
            </form>
  </section>

<?php 
require '../../footer.php';
?>
</body>
<script>
  document.getElementById( 'afficher' ).addEventListener( "click", function() {
   
   attribut = document.getElementById( 'passMemb' ).getAttribute( 'type');
   if(attribut == 'password'){
       document.getElementById( 'passMemb' ).setAttribute( 'type', 'text');
   } else {
       document.getElementById( 'passMemb' ).setAttribute( 'type', 'password');
   }
   
});
</script>

        