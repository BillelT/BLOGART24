<?php
include '../../../header.php';
?>

<!-- Bootstrap form to create a new mot clé -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création nouveau Mot-Clé</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new mot-cle -->
            <form action="<?php echo ROOT_URL . '/api/keywords/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libMotCle">Nom du Mot-Clé</label>
                    <input id="libMotCle" name="libMotCle" class="form-control" type="text" autofocus="autofocus" />
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Confirmer create ?</button>
                </div>
            </form>
        </div>
    </div>
</div>