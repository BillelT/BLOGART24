<?php
include '../../../header.php';

if(isset($_GET['numMemb'])){
    $numMemb = $_GET['numMemb'];
 ?>
<!-- Bootstrap form to delete a thematique -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression Membre</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to delete a thematique -->
            <form action="<?php echo ROOT_URL . '/api/members/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="numMemb">Nom du Membre</label>
                    <input id="numMemb" name="numMemb" class="form-control" style="display: none" type="text" value="<?php echo($numMemb); ?>" readonly="readonly" />
                    <input id="prenomMemb" name="prenomMemb" class="form-control" type="text" value="<?php echo($prenomMemb); ?>" readonly="readonly" disabled />
                    <input id="nomMemb" name="nomMemb" class="form-control" type="text" value="<?php echo($nomMemb); ?>" readonly="readonly" disabled />
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
            <h1>Suppression Membre</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to delete a thematique -->
            <form action="<?php echo ROOT_URL . '/api/members/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="numMemb">Nom du Membre</label>
                    <br>
                    <select name="numMemb" id="numMemb">
                        <option value="">Choisir un Membre</option>
                        <?php 
                            $result = sql_select('membre');
                            foreach($result as $req){
                                echo '<option value="' . $req['numMemb'] . '">' . $req['nomMemb'] .', ' . $req['prenomMemb'] . '</option>';
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
