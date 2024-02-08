<?php 
require '../../header.php';
?>
  <section class="connexion" style="background-color: #FEF5EA;">

    <div class="title-connexion">
      <h3>En vous connectant, vous 
        pourrez liker, partager ou 
        commenter notre contenu
        et intéragir avec les autres
        utilisateurs.</h3>
    </div>

    <?php if(isset($_SESSION["numStat"])){
        echo "Bonjour ".$_SESSION["numStat"];
    } ?>

<!-- Bootstrap form to create a new statut -->

            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/security/connexion.php' ?>" method="post">
                <div class="form-group email">
                    <label for="eMailMemb" class="col-form-label">Adresse mail :</label>
                    <input id="eMailMemb" name="eMailMemb" class="form-control" type="email" autofocus="autofocus" />
                </div>
                <div class="form-group motdepasse col-auto">
                    <label for="passMemb" class="col-form-label">Mot de passe :</label>
                    <input id="passMemb" name="passMemb" class="form-control" type="password" autofocus="autofocus" aria-describedby="passwordHelp" />
                    <button type="button" id="afficher"  class="btn btn-secondary">Afficher le mot de passe</button>
                    <span id="passwordHelp" class="form-text">
                    La longueur doit être comprise entre 8 et 20 caractères.
                    </span>
                </div>
                <div class="valid form-check">
                <input class="form-check-input" type="checkbox" value="" id="cookies">
                <label class="form-check-label" for="cookies">
                    Se souvenir de moi
                </label>
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="connect border">Se connecter</button>
                    <p class="link-opacity-100">Pas de compte ?</p>
                    <input type="button" onclick="location.href='#'" value="inscription" />
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

        