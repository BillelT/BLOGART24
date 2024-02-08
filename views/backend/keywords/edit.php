<?php
include '../../../header.php';

//seulement si tu es admi ou moderateur tu as accès à cette page
if (!isset($_SESSION['numStat']) || $_SESSION['numStat'] !== 1 && $_SESSION['numStat'] !== 2 ) {
    // Rediriger vers une page d'erreur ou une page d'accueil
    header('Location: ../../index.php');
    exit();
}

if(isset($_GET['numMotCle'])){
    $numMotCle = $_GET['numMotCle'];
    $libMotCle = sql_select("motcle", "libMotCle", "numMotCle = $numMotCle")[0]['libMotCle'];
}
?>

<!-- Bootstrap form to modify a new keyword -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modification Mot Clé</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new keyword-->
            <form action="<?php echo ROOT_URL . '/api/keywords/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="libMotCle">Nouveau Mot Clé</label>
                    <input id="numMotCle" name="numMotCle" class="form-control" style="display: none" type="text" value="<?php echo($numMotCle); ?>" readonly="readonly" />
                    <input id="libMotCle" name="libMotCle" class="form-control" type="text" value="<?php echo($libMotCle); ?>" />
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirmer update ?</button>
                </div>
            </form>
        </div>
    </div>
</div>