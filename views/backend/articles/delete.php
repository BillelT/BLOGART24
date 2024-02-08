<?php
include '../../../header.php';

//seulement si tu es admi ou moderateur tu as accès à cette page
if (!isset($_SESSION['numStat']) || $_SESSION['numStat'] !== 1 && $_SESSION['numStat'] !== 2) {
    // Rediriger vers une page d'erreur ou une page d'accueil
    header('Location: /index.php');
    exit();
}

if(isset($_GET['numArt'])){
    $numArt = $_GET['numArt'];
    $article = sql_select('article INNER JOIN thematique ON article.numThem = thematique.numThem', '*', "numArt = '$numArt'")[0];
    $libTitrArt = $article['libTitrArt'];
    $dtCreaArt = $article['dtCreaArt'];
    $libChapoArt = $article['libChapoArt'];
    $libAccrochArt = $article['libAccrochArt'];
    $parag1Art = $article['parag1Art'];
    $libSsTitr1Art = $article['libSsTitr1Art'];
    $parag2Art = $article['parag2Art'];
    $libSsTitr2Art = $article['libSsTitr2Art'];
    $parag3Art = $article['parag3Art'];
    $libConclArt = $article['libConclArt'];
    $urlPhotArt = $article['urlPhotArt'];
    $numThem = $article['numThem'];
    $libThem = $article['libThem'];
}
    ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression Article</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/articles/delete.php' ?>" method="post" id="form" type="post">
                <div class="form-group">
                <input id="numArt" name="numArt" class="form-control" style="display: none" type="text" value="<?php echo($numArt); ?>" readonly="readonly" />
                    <label for="libTitrArt">Titre</label>
                    <input id="libTitrArt" name="libTitrArt" class="form-control" type="text" autofocus="autofocus" value="<?php echo($libTitrArt); ?>" readonly="readonly" />
                    <br>
                    <label for="dtCreaArt">Date création</label>
                    <input id="dtCreaArt" name="dtCreaArt" class="form-control" type="datetime-local" autofocus="autofocus" value="<?php echo($dtCreaArt); ?>" readonly="readonly" />
                    <br>
                    <label for="libChapoArt">Chapeau</label>
                    <textarea id="libChapoArt" name="libChapoArt" class="form-control" placeholder="Décrivez le chapeau. Sur 500 caractères." maxlength="500" style="height: 200px;" readonly="readonly"><?php echo($libChapoArt); ?></textarea>
                    <br>
                    <label for="libAccrochArt">Accroche paragraphe 1</label>
                    <input id="libAccrochArt" name="libAccrochArt" class="form-control" type="text" autofocus="autofocus" maxlength="100" placeholder="" value="<?php echo($libAccrochArt); ?>" readonly="readonly" />
                    <br>sur 100 car.
                    <label for="parag1Art">Paragraphe 1</label>
                    <textarea id="parag1Art" name="parag1Art" class="form-control" placeholder="Décrivez le premier paragraphe. Sur 1200 car." maxlength="1200" style="height: 200px;" readonly="readonly"><?php echo($parag1Art); ?></textarea>
                    <br>
                    <label for="libSsTitr1Art">Sous-titre 1</label>
                    <input id="libSsTitr1Art" name="libSsTitr1Art" class="form-control" type="text" autofocus="autofocus" maxlength="100" placeholder="Sur 100 car." value="<?php echo($libSsTitr1Art); ?>" readonly="readonly" />
                    <br>
                    <label for="parag2Art">Paragraphe 2</label>
                    <textarea id="parag2Art" name="parag2Art" class="form-control" placeholder="Décrivez le deuxième paragraphe. Sur 1200 car." maxlength="1200" style="height: 200px;" readonly="readonly"><?php echo($parag2Art); ?></textarea>
                    <br>
                    <label for="libSsTitr2Art">Sous-titre 2</label>
                    <input id="libSsTitr2Art" name="libSsTitr2Art" class="form-control" type="text" autofocus="autofocus" maxlength="100" placeholder="Sur 100 car." value="<?php echo($libSsTitr2Art); ?>" readonly="readonly" />
                    <br>
                    <label for="parag3Art">Paragraphe 3</label>
                    <textarea id="parag3Art" name="parag3Art" class="form-control" placeholder="Décrivez le troisième paragraphe. Sur 1200 car." maxlength="1200" style="height: 200px;" readonly="readonly"><?php echo($parag3Art); ?></textarea>
                    <br>
                    <label for="libClonclArt">Conclusion</label>
                    <textarea id="libConclArt" name="libConclArt" class="form-control" placeholder="Décrivez la conclusion. Sur 800 car." maxlength="500" style="height: 200px;" readonly="readonly"><?php echo($libConclArt); ?></textarea>
                    <br>


                    <!-- image !-->
                    <img src="" />
                    <!-- choix de la thématique !-->
                    <label for="libThem">Thématique</label>
                    <input id="libThem" name="libThem" class="form-control" type="text" autofocus="autofocus" value="<?php echo($libThem); ?>" readonly="readonly" />
                </div>
                <div class="form-group mt-2" style="margin: 32px auto 128px;">
                    <button type="submit" class="btn btn-primary ">Confirmer delete ?</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include '../../../footer.php';


?>
