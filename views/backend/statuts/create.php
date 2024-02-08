<?php
include '../../../header.php';

//seulement si tu es admi ou moderateur tu as accès à cette page
if (!isset($_SESSION['numStat']) || $_SESSION['numStat'] !== 3) {
    // Rediriger vers une page d'erreur ou une page d'accueil
    header('index.php');
    exit();
}else {
    //accès au bouton profil 
}

?>

<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création nouveau Statut</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/statuts/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libStat">Nom du statut</label>
                    <input id="libStat" name="libStat" class="form-control" type="text" autofocus="autofocus" />
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Confirmer create ?</button>
                </div>
            </form>
        </div>
    </div>
</div>