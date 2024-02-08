<?php 
require '../../header.php';
?>
  <section class="form-inscription" style="background-color: #FEF5EA;">
  <link rel="stylesheet" href="../../src/css/inscription.css">
    <div class="title-inscription">
      <h3>En vous inscrivant, vous 
        pourrez liker, partager ou 
        commenter notre contenu
        et intéragir avec les autres
        utilisateurs.</h3>
    </div>
            <!-- Form to create a new statut -->
            <form class="form-group" action="<?php echo ROOT_URL . '/api/security/signup.php' ?>" method="post" id="formCreate">
                <div class="form-group">
                    <!-- PSEUDO -->
                    <div class="box-input">
                    <label for="pseudoMemb" class="p-before-input">Pseudo du membre (non modifiable)</label>
                    <input id="pseudoMemb" name="pseudoMemb" class="form-control" type="text" autofocus="autofocus" />
                    <p>(entre 6 et 70 caractères)</p>
                    </div>
                    <!-- PRENOM -->
                    <div class="box-input">
                    <label for="prenomMemb" class="p-before-input">Prénom du membre</label>
                    <input id="prenomMemb" name="prenomMemb" class="form-control" type="text" autofocus="autofocus" />
                    </div>
                    <!-- NOM -->
                    <div class="box-input">
                    <label for="nomMemb" class="p-before-input">Nom du membre</label>
                    <input id="nomMemb" name="nomMemb" class="form-control" type="text" autofocus="autofocus" />
                    </div>
                    <!-- MDP -->
                    <div class="box-input">
                    <label for="passMemb" class="p-before-input">Mot de passe du membre</label>
                    <input id="passMemb" name="passMemb" class="form-control" type="password" autofocus="autofocus" />
                    <button type="button" id="afficher"  class="button-afficher">Afficher le mot de passe</button>
                    <p>(Entre 8 et 15 car., au - une majuscule, une minuscule, un chiffre, car. spéciaux acceptés)</p>
                    </div>
                    <!-- MDP VERIFICATION -->
                    <div class="box-input">
                    <label for="passMemb2" class="p-before-input">Confirmez mot de passe du membre</label>
                    <input id="passMemb2" name="passMemb2" class="form-control" type="password" autofocus="autofocus" />
                    <button type="button" id="afficher2" class="button-afficher">Afficher le mot de passe</button>
                    <p>(Entre 8 et 15 car., au - une majuscule, une minuscule, un chiffre, car. spéciaux acceptés)</p>
                    </div>
                    <!-- EMAIL -->
                    <div class="box-input">
                    <label for="eMailMemb" class="p-before-input">Email du membre</label>
                    <input id="eMailMemb" name="eMailMemb" class="form-control" type="text" autofocus="autofocus" />
                    </div>
                    <!-- EMAIL VERIFICATION -->
                    <div class="box-input">
                    <label for="eMailMemb2" class="p-before-input">Confirmez email du membre</label>
                    <input id="eMailMemb2" name="eMailMemb2" class="form-control" type="text" autofocus="autofocus" />
                    </div>
                    <!-- PARTAGE DES DONNEES -->
                    <div class="condition-valid">
                    <div>
                    <input class="form-check-input" type="checkbox" id="accordMemb" name="accordMemb" value="OUI" />
                    <label for="accordMemb">J'accepte que mes données soient conservées :</label>
                    </div>
                    <!-- ACCEPTER -->
                    <div class="box-input">
                    <input class="form-check-input" type="checkbox" id="accordMemb2" name="accordMemb2" value="OUI" />
                    <label for="accordMemb2">J'accepte</label>
                    </div>
                    <div>
                    <!-- STATUT -->
                    <input id="numStat" name="numStat" class="form-control" style="display: none" type="text" value="3" readonly="readonly" />
                    <!-- COOKIES -->
                    <div class="valid form-check">
                        <input class="form-check-input" type="checkbox" value="" id="cookies">
                        <label class="form-check-label" for="cookies">
                            Se souvenir de moi
                        </label>
                    </div>
                    <div class="box-button">
                    <div class="div-inscription">
                        <button type="submit" class="button-inscription">Inscription</button>
                    </div>
                <div class="div-connexion">
                    <p class="link-opacity-100">Déjà inscrit ?</p>
                    <button type="submit" class="button-connexion">Connexion</button>
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
document.getElementById( 'afficher2' ).addEventListener( "click", function() {
   
   attribut = document.getElementById( 'passMemb2' ).getAttribute( 'type');
   if(attribut == 'password'){
       document.getElementById( 'passMemb2' ).setAttribute( 'type', 'text');
   } else {
       document.getElementById( 'passMemb2' ).setAttribute( 'type', 'password');
   }
   
});
</script>

        