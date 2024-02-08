<?php
include '../../../header.php';

//seulement si tu es admi ou moderateur tu as accès à cette page
if (!isset($_SESSION['numStat']) || $_SESSION['numStat'] !== 1 && $_SESSION['numStat'] !== 2 ) {
    // Rediriger vers une page d'erreur ou une page d'accueil
    header('Location: /index.php');
    exit();
}

if(isset($_GET['numArt'])){
    $numArt = $_GET['numArt'];
    $article = sql_select("article
    INNER JOIN thematique ON article.numThem = thematique.numThem", "*", "numArt = '$numArt'")[0];
    $dtCreaArt = $article['dtCreaArt'];
    $libTitrArt = $article['libTitrArt'];
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

<!-- Bootstrap form to create a new member -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modification Article</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new member -->
            <form action="<?php echo ROOT_URL . '/api/articles/update.php' ?>" method="post" id="form">
                <div class="form-group">
                    <label for="libTitrArt">Titre</label>
                    <input id="libTitrArt" name="libTitrArt" class="form-control" type="text" autofocus="autofocus" value="<?php echo($libTitrArt); ?>">
                    <br>
                    <label for="dtCreaArt">Date création</label>
                    <input id="dtCreaArt" name="dtCreaArt" class="form-control" type="datetime-local" autofocus="autofocus" value="<?php echo($dtCreaArt); ?>">
                    <br>
                    <label for="libChapoArt">Chapeau</label>
                    <input id="libChapoArt" name="libChapoArt" class="form-control" placeholder="Décrivez le chapeau. Sur 500 caractères." maxlength="500" value="<?php echo($libChapoArt); ?>"></input>
                    <br>
                    <label for="libAccrochArt">Accroche paragraphe 1</label>
                    <input id="libAccrochArt" name="libAccrochArt" class="form-control" type="text" autofocus="autofocus" maxlength="100" placeholder="" value="<?php echo($libAccrochArt); ?>">
                    <br>sur 100 car.
                    <label for="parag1Art">Paragraphe 1</label>
                    <input id="parag1Art" name="parag1Art" class="form-control" placeholder="Décrivez le premier paragraphe. Sur 1200 car." maxlength="1200" value="<?php echo($parag1Art); ?>"></input>
                    <br>
                    <label for="libSsTitr1Art">Sous-titre 1</label>
                    <input id="libSsTitr1Art" name="libSsTitr1Art" class="form-control" type="text" autofocus="autofocus" maxlength="100" placeholder="Sur 100 car." value="<?php echo($libSsTitr1Art); ?>">
                    <br>
                    <label for="parag2Art">Paragraphe 2</label>
                    <input id="parag2Art" name="parag2Art" class="form-control" placeholder="Décrivez le deuxième paragraphe. Sur 1200 car." maxlength="1200" value="<?php echo($parag2Art); ?>"></input>
                    <br>
                    <label for="libSsTitr2Art">Sous-titre 2</label>
                    <input id="libSsTitr2Art" name="libSsTitr2Art" class="form-control" type="text" autofocus="autofocus" maxlength="100" placeholder="Sur 100 car." value="<?php echo($libSsTitr2Art); ?>">
                    <br>
                    <label for="parag3Art">Paragraphe 3</label>
                    <input id="parag3Art" name="parag3Art" class="form-control" placeholder="Décrivez le troisième paragraphe. Sur 1200 car." maxlength="1200" value="<?php echo($parag3Art); ?>"></input>
                    <br>
                    <label for="libClonclArt">Conclusion</label>
                    <input id="libConclArt" name="libConclArt" class="form-control" placeholder="Décrivez la conclusion. Sur 800 car." maxlength="500" value="<?php echo($libConclArt); ?>"></textarea>
                    <br>


                    <!-- image !-->
                    <label for="urlPhotArt">Choisir une image :</label>
                    <input type="file" id="urlPhotArt" name="urlPhotArt" accept=".jpg, .jpeg, .png, .gif" maxlength="80000" width="80000" height="80000" size="200000000000" value="<?php echo($urlPhotArt); ?>">

                    <p>>> Extension des images acceptées : .jpg, .gif, .png, .jpeg (lageur, hauteur, taille max : 80000px, 80000px, 200 000 Go)</p>

                    <!-- choix de la thématique !-->
                    <p><br></p>
                    <label for="libThem">Thématique :<br></label>
                    <select name="thematique" id="libThem">
                        <option value="">Cliquez et selectionnez une thématique</option>
                        <?php
                        $result = sql_select('thematique');
                        foreach ($result as $req) {
                            echo '<option value="' . $req['numThem'] . '">' . $req['libThem'] . '</option>';
                        }
                        ?>
                    </select>
                    <p><br></p>
                    <!-- MOTS CLES -->
                    <label for="addMotCle">Choisissez des Mots-Clés:</label>
                    <select name="addMotCle" id="addMotCle" size="5">
                        <option value="">-- Choisir des mots clés --</option>
                        <?php
                        $result = sql_select('motCle');
                        foreach ($result as $req) {
                            echo '<option id="mot" value="' . $req['numMotCle'] . '">' . $req['libMotCle'] . '</option>';
                        }
                        ?>
                    </select>
                    <p style="margin: 0 32px; display : inline-block; text-align : center;" id="addKeyWords">Ajouter Mots-Clés ?</p>
                    <select id="newMotCle" name="choix[]" multiple size="5" style="margin-left: 32px;">
                        <option value="">-- Mots-Clés choisis --</option>

                        <script>
                        const newOptions = newMotCle.options;

                        addMotCle.addEventListener('click', (e) => {
                            if (e.target.tagName !== "OPTION") {
                                return;
                            }
                            e.target.setAttribute('selected', true);+
                            +
                            newMotCle.appendChild(e.target);
                        })
                        newMotCle.addEventListener('click', (e) => {
                            console.log(newOptions);
                            if (e.target.tagName !== "OPTION") {
                                return;
                            }
                            e.stopPropagation();
                            e.preventDefault();
                            e.stopImmediatePropagation();
                            e.target.setAttribute('selected', false);
                            addMotCle.appendChild(e.target);
                            for (let option of newMotCle.children){
                                option.setAttribute('selected',true);
                                console.log(option);
                            }
                        });
                    </script>
                    </select>
                </div>
                <br>
                

                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Est-ce que tu es sûr(e)?')">Confirmer update ?</button>
                </div>
               
            </form>
        </div>
    </div>
</div>