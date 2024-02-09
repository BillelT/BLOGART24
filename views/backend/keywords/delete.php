<?php
include '../../../header.php';
//seulement si tu es admi ou moderateur tu as accès à cette page
if (!isset($_SESSION['numStat']) || $_SESSION['numStat'] !== 1 && $_SESSION['numStat'] !== 2 ) {
    // Rediriger vers une page d'erreur ou une page d'accueil
    header('Location: /index.php');
    exit();
}

if(isset($_GET['numMotCle'])){
    $numMotCle = $_GET['numMotCle'];
    $libMotCle = sql_select("MOTCLE", "libMotCle", "numMotCle = $numMotCle")[0]['libMotCle'];
 ?>
<!-- Bootstrap form to delete a thematique -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression Mot-Clé</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to delete a thematique -->
            <form action="<?php echo ROOT_URL . '/api/keywords/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libMotCle">Nom du Mot-Clé</label>
                    <input id="numMotCle" name="numMotCle" class="form-control" style="display: none" type="text" value="<?php echo($numMotCle); ?>" readonly="readonly" />
                    <input id="libMotCle" name="libMotCle" class="form-control" type="text" value="<?php echo($libMotCle); ?>" readonly="readonly" disabled />
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Est-ce que tu es sûr(e)?')">Confirmer delete ?</button>
                </div>
            </form>
        </div>
    </div>
</div> 
<?php } else {
    ?> 
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression Mot-Clé</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to delete a thematique -->
            <form action="<?php echo ROOT_URL . '/api/keywords/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="numMotCle">Nom du Mot-Clé</label>
                    <br>
                    <select name="numMotCle" id="numMotCle">
                        <option value="">Choisir un Mot-Clé</option>
                        <?php 
                            $result = sql_select('MOTCLE');
                            foreach($result as $req){
                                echo '<option value="' . $req['numMotCle'] . '">' . $req['libMotCle'] . '</option>';
                            }
                        ?>
                    </select>
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Est-ce que tu es sûr(e)?')">Confirmer delete ?</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
}
include '../../../footer.php'; // contains the footer