<?php
include '../../../header.php';
?>

<!-- Bootstrap form to create a new member -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création nouveau Membre</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new member -->
            <form action="<?php echo ROOT_URL . '/api/members/create.php' ?>" method="post">
                <div class="form-group">
                    <!-- PSEUDO -->
                    <label for="pseudoMemb">Pseudo du membre (non modifiable)</label>
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
                    <input id="passMemb" name="passMemb" class="form-control" type="text" autofocus="autofocus" />
                    <p>(Entre 8 et 15 car., au - une majuscule, une minuscule, un chiffre, car. spéciaux acceptés)</p>
                    <label for="afficher">Afficher le mot de passe</label>
                    <input type="checkbox" id="afficher" name="afficher" /><br><br>
                    <!-- MDP VERIFICATION -->
                    <label for="passMemb2">Confirmez mot de passe du membre</label>
                    <input id="passMemb2" name="passMemb2" class="form-control" type="text" autofocus="autofocus" />
                    <p>(Entre 8 et 15 car., au - une majuscule, une minuscule, un chiffre, car. spéciaux acceptés)</p>
                    <label for="afficher2">Afficher le mot de passe</label>
                    <input type="checkbox" id="afficher2" name="afficher2" /><br><br>
                    <!-- EMAIL -->
                    <label for="eMailMemb">Email du membre</label>
                    <input id="eMailMemb" name="eMailMemb" class="form-control" type="text" autofocus="autofocus" />
                    <!-- EMAIL VERIFICATION -->
                    <label for="eMailMemb2">Confirmez email du membre</label>
                    <input id="eMailMemb2" name="eMailMemb2" class="form-control" type="text" autofocus="autofocus" />
                    <!-- PARTAGE DES DONNEES -->
                    <label for="accordMemb">J'accepte que mes données soient conservées</label>
                    <input type="radio" id="accordMemb" name="accordMemb" value="true" />
                    <label for="accordMemb">Yes</label>
                    <input type="radio" id="accordMemb" name="accordMemb" value="false" checked />
                    <label for="accordMemb">No</label>
                    <br><br>
                    <!-- STATUT -->
                    <label for="statutMemb">Statut :</label>
                    <select name="statutMemb" id="statutMemb">
                    <option value="">--Choisir un statut--</option>
                    <option value="1">Administrateur</option>
                    <option value="2">Modérateur</option>
                    <option value="3">Membre</option>
                    </select>
                    <!-- ROBOT -->
                    <!-- VOIR GOOGLE CAPTCHA V3 A INSTALLER!!!!!!-->
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Confirmer create ?</button>
                </div>
            </form>
        </div>
    </div>
</div>