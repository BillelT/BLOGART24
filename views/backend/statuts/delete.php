<?php
include '../../../header.php';

if(isset($_GET['numStat'])){
    $numStat = $_GET['numStat'];
    $libStat = sql_select("STATUT", "libStat", "numStat = $numStat")[0]['libStat'];
 ?>
<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression Statut</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/statuts/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libStat">Nom du statut</label>
                    <input id="numStat" name="numStat" class="form-control" style="display: none" type="text" value="<?php echo($numStat); ?>" readonly="readonly" />
                    <input id="libStat" name="libStat" class="form-control" type="text" value="<?php echo($libStat); ?>" readonly="readonly" disabled />
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
            <h1>Suppression Statut</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/statuts/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="numStat">Nom du Statut</label>
                    <br>
                    <select name="numStat" id="numStat">
                        <option value="">Choisir un statut</option>
                        <?php 
                            $result = sql_select('statut');
                            foreach($result as $req){
                                echo '<option value="' . $req['numStat'] . '">' . $req['libStat'] . '</option>';
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
</div>';
<?php 
}