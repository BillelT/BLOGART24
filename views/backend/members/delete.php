<?php
include '../../../header.php';
?>

<!-- Bootstrap form to create a new member -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression Membre</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to delete a member -->
            <form action="<?php echo ROOT_URL . '/api/members/delete.php' ?>" method="post">
                <div class="form-group">
                    <!-- NUMERO DU MEMBRE -->
                    <label for="numMemb">Numéro du membre</label>
                    <input id="numMemb" name="numMemb" class="form-control" type="text" autofocus="autofocus" />
                    <!-- PSEUDO -->
                    <label for="pseudoMemb">Pseudo du membre</label>
                    <input id="pseudoMemb" name="pseudoMemb" class="form-control" type="text" autofocus="autofocus" />
                    <!-- DATE DE CREA -->
                    <label for="dtCreaMemb">Date de création du compte</label>
                    <input id="dtCreaMemb" name="dtCreaMemb" class="form-control" type="text" autofocus="autofocus" />
                    <!-- NOM -->
                    <label for="nomMemb">Nom du membre</label>
                    <input id="nomMemb" name="nomMemb" class="form-control" type="text" autofocus="autofocus" />
                    <!-- PRENOM -->
                    <label for="prenomMemb">Prénom du membre</label>
                    <input id="prenomMemb" name="prenomMemb" class="form-control" type="text" autofocus="autofocus" />
                    <!-- EMAIL -->
                    <label for="eMailMemb">Email du membre</label>
                    <input id="eMailMemb" name="eMailMemb" class="form-control" type="text" autofocus="autofocus" />
                    <!-- STATUT -->
                    <label for="statutMemb">Statut :</label>
                    <select name="statutMemb" id="statutMemb">
                        <option value="admin">Administrateur</option>
                        <option value="moderateur">Modérateur</option>
                        <option value="member">Membre</option>
                    </select>
                    <p style="color:red">Attention : L'existence de Membres associés à un ou plusieurs commentaires/likes rendra la suppression impossible.</p>
                    <!-- CAPTCHA ROBOT A AJOUTER!!!!!!!!!-->
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Confirmer delete ?</button>
                </div>
            </form>
        </div>
    </div>
</div>