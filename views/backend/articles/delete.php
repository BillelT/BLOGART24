
<?php
include '../../../header.php';

//seulement si tu es admi ou moderateur tu as accès à cette page
if (!isset($_SESSION['numStat']) || $_SESSION['numStat'] !== 1 && $_SESSION['numStat'] !== 2 ) {
    // Rediriger vers une page d'erreur ou une page d'accueil
    header('Location: ../../index.php');
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
            <form action="<?php echo ROOT_URL . '/api/articles/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libStat">Titre</label>
                    <input id="titre" name="libTitrArt" class="form-control" type="text" autofocus="autofocus" placeholder="Sur 100 car." value="<?php echo($libTitrArt); ?>" readonly="readonly" disabled>
                    <br>
                    <label for="libStat">Date création</label>
                    <input id="Datecreation" name="dtCreaArt" class="form-control" type="datetime-local" autofocus="autofocus" placeholder="jj/mm/aaaa" value="<?php echo($dtCreaArt); ?>" readonly="readonly" disabled>
                    <br>
                    <label for="libStat">Chapeau</label>
                    <input id="Chapeau" name="libChapoArt" class="form-control"  type="text" autofocus="autofocus" placeholder="Décrivez le chapeau. Sur 500 caractères." maxlength="500" value="<?php echo($libChapoArt); ?>" readonly="readonly" disabled></textarea>
                    <br>
                    <label for="libStat">Accroche paragraphe 1</label>
                    <input id="Accroche1" name="libAccrochArt" class="form-control" type="text" autofocus="autofocus" maxlength="100" placeholder="" value="<?php echo($libAccrochArt); ?>" readonly="readonly" disabled>
                    <br>sur 100 car.
                    <label for="libStat">Paragraphe 1</label>
                    <input id="Paragraphe1" name="parag1Art" class="form-control"  type="text" autofocus="autofocus" placeholder="Décrivez le premier paragraphe. Sur 1200 car." maxlength="1200" value="<?php echo($parag1Art); ?>" readonly="readonly" disabled></textarea>
                    <br>
                    <label for="libStat">Sous-titre 1</label>
                    <input id="Soustitre1" name="libSsTitr1Art" class="form-control" type="text" autofocus="autofocus" maxlength="100" placeholder="Sur 100 car." value="<?php echo($libSsTitr1Art); ?>" readonly="readonly" disabled>
                    <br>
                    <label for="libStat">Paragraphe 2</label>
                    <input id="Paragraphe2" name="parag2Art" class="form-control"  type="text" autofocus="autofocus" placeholder="Décrivez le deuxième paragraphe. Sur 1200 car." maxlength="1200" value="<?php echo($parag2Art); ?>" readonly="readonly" disabled></textarea>
                    <br>
                    <label for="libStat">Sous-titre 2</label>
                    <input id="Soustitre2" name="libSsTitr2Art" class="form-control" type="text" autofocus="autofocus" maxlength="100" placeholder="Sur 100 car." value="<?php echo($libSsTitr2Art); ?>" readonly="readonly" disabled>
                    <br>
                    <label for="libStat">Paragraphe 3</label>
                    <input id="Paragraphe3" name="parag3Art" class="form-control"  type="text" autofocus="autofocus" placeholder="Décrivez le troisième paragraphe. Sur 1200 car." maxlength="1200" value="<?php echo($parag3Art); ?>" readonly="readonly" disabled></textarea>
                    <br>
                    <label for="libStat">Conclusion</label>
                    <input id="Conclusion" name="libConclArt" class="form-control"  type="text" autofocus="autofocus" placeholder="Décrivez la conclusion. Sur 800 car." maxlength="500" value="<?php echo($libConclArt); ?>" readonly="readonly" disabled></textarea>
                    <br>
                    <input id="numArt" name="numArt" class="form-control" style="display: none" type="text" value="<?php echo($numArt); ?>" readonly="readonly" />
                   

                    <!-- image !-->
                    <label for="imageInput">Choisir une image :</label>
                    <input type="file" id="imageInput" name="urlPhotArt" accept=".jpg, .jpeg, .png, .gif" maxlength="80000" width="80000" height="80000" size="200000000000" value="<?php echo($urlPhotArt); ?>" readonly="readonly" disabled>
                    
                    <p>>> Extension des images acceptées : .jpg, .gif, .png, .jpeg (lageur, hauteur, taille max : 80000px, 80000px, 200 000 Go)</p>
                    <!-- choix de la thématique !-->
                    <p><br></p>
                    <label for="libThem">Thématique :</label>
                    <select name="thematique" id="libThem">
                        <option value="<?php echo($numThem); ?>"><?php echo($libThem); ?></option>
                    </select>
                   


                </div>
                <br>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Est-ce que tu es sûr(e)?')">Confirmer delete ?</button>
                </div>
                <?php 
                    $requiredFields = ['libTitrArt', 'dtCreaArt', 'libChapoArt', 'libAccrochArt', 'parag1Art', 'libSsTitr1Art', 'parag2Art', 'libSsTitr2Art', 'parag3Art', 'libConclArt',];

                    foreach ($requiredFields as $field) {
                        if (empty($_POST[$field])) {
                            echo "Veuillez remplir tous les champs du formulaire.";
                            exit();
                        }
                    }
                    ?>
                
                


            </form>
        </div>
    </div>
</div>

<?php
include '../../../header.php';


?>
