<?php
include '../../../header.php';

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
                    <label for="libMotClé">Nom du Mot-Clé</label>
                    <input id="numMotCle" name="numMotCle" class="form-control" style="display: none" type="text" value="<?php echo($numMotCle); ?>" readonly="readonly" />
                    <input id="libMotCle" name="libMotCle" class="form-control" type="text" value="<?php echo($libMotCle); ?>" readonly="readonly" disabled />
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirmer delete ?</button>
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
                    <label for="numMotCle">Nom du Mot-Clé/label>
                    <br>
                    <select name="numMotCle" id="numMotCle">
                        <option value="">Choisir un Mot-Clé</option>
                        <?php 
                            $result = sql_select('motcle');
                            foreach($result as $req){
                                echo '<option value="' . $req['numMotCle'] . '">' . $req['libMotCle'] . '</option>';
                            }
                        ?>
                    </select>
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirmer delete ?</button>
                </div>
            </form>
        </div>
    </div>
</div>';
<?php 
}