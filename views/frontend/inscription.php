<?php 
require '../../header.php';
?>
  <section class="form-inscription" style="background-color: #FEF5EA;">
    <div class="title-inscription">
      <h3>En vous inscrivant, vous 
        pourrez liker, partager ou 
        commenter notre contenu
        et intéragir avec les autres
        utilisateurs.</h3>
    </div>
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/security/signup.php' ?>" method="post" id="formCreate">
                <div class="form-group">
                    <!-- PSEUDO -->
                    <label for="pseudoMemb">Pseudo du membre (entre xx et xx caractères)</label>
                    <input id="pseudoMemb" name="pseudoMemb" class="form-control" type="text" autofocus="autofocus" />
                    <p>(entre 6 et 70 caractères)</p>
                    <!-- PRENOM -->
                    <label for="prenomMemb">Prénom du membre</label>
                    <input id="prenomMemb" name="prenomMemb" class="form-control" type="text" autofocus="autofocus" />
                    <!-- NOM -->
                    <label for="nomMemb">Nom du membre</label>
                    <input id="nomMemb" name="nomMemb" class="form-control" type="text" autofocus="autofocus" />
                    <!-- MDP -->
                    <label for="passMemb">Mot de passe du membre</label>
                    <input id="passMemb" name="passMemb" class="form-control" type="password" autofocus="autofocus" />
                    <p>(Entre 8 et 15 car., au - une majuscule, une minuscule, un chiffre, car. spéciaux acceptés)</p>
                    <button type="button" id="afficher"  class="btn btn-secondary">Afficher le mot de passe</button><br><br>
                    <!-- MDP VERIFICATION -->
                    <label for="passMemb2">Confirmez mot de passe du membre</label>
                    <input id="passMemb2" name="passMemb2" class="form-control" type="password" autofocus="autofocus" />
                    <p>(Entre 8 et 15 car., au - une majuscule, une minuscule, un chiffre, car. spéciaux acceptés)</p>
                    <button type="button" id="afficher2" class="btn btn-secondary">Afficher le mot de passe</button><br><br>
                    <!-- EMAIL -->
                    <label for="eMailMemb">Email du membre</label>
                    <input id="eMailMemb" name="eMailMemb" class="form-control" type="text" autofocus="autofocus" />
                    <!-- EMAIL VERIFICATION -->
                    <label for="eMailMemb2">Confirmez email du membre</label>
                    <input id="eMailMemb2" name="eMailMemb2" class="form-control" type="text" autofocus="autofocus" />
                    <!-- PARTAGE DES DONNEES -->
                    <label for="accordMemb">J'accepte que mes données soient conservées :</label>
                    <input type="radio" id="accordMemb" name="accordMemb" value="OUI" />
                    <label for="accordMemb">Oui</label>
                    <input type="radio" id="accordMemb" name="accordMemb" value="NON" checked />
                    <label for="accordMemb">Non</label>
                    <br><br>
                    <!-- ACCEPTER -->
                    <label for="accordMemb2">J'accepte  :</label>
                    <input type="radio" id="accordMemb2" name="accordMemb2" value="OUI" />
                    <label for="accordMemb2">Oui</label>
                    <input type="radio" id="accordMemb2" name="accordMemb2" value="NON" checked />
                    <label for="accordMemb2">Non</label>
                    <br><br>
                    <!-- STATUT -->
                    <input id="numStat" name="numStat" class="form-control" style="display: none" type="text" value="'3'" readonly="readonly" />
                    <!-- COOKIES -->
                    <div class="valid form-check">
                        <input class="form-check-input" type="checkbox" value="" id="cookies">
                        <label class="form-check-label" for="cookies">
                            Se souvenir de moi
                        </label>
                    </div>
                    <p class="link-opacity-100">Déjà inscrit ?</p>
                    <input type="button" onclick="location.href='#'" value="connexion" />
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Confirmer create ?</button>
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

        