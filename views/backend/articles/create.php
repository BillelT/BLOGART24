<?php
include '../../../header.php';


//conditions pour l'ajout d'une image
if (isset($_FILES['image'])) {
    // Récupère les informations du fichier
    $tmpName = $_FILES["image"]["tmp_name"];
    $name = $_FILES["image"]["name"];
    $size = $_FILES["image"]["size"];
    $error = $_FILES["image"]["error"];

    echo "Chemin: " . $tmpName . "<br>";
    echo "Nom : " . $name . "<br>";
    echo "Taille : " . $size . "<br>";

    if ($error != UPLOAD_ERR_OK) {
        echo "Erreur lors du téléchargement du fichier.";
        exit();
    }

    // Vérifie que la taille du fichier est inférieure à 200 000px.
    if ($size > 200000) {
        echo "Téléchargement impossible, fichier trop volumineux";
        exit();
    }

    // Récupérer la longueur et la largeur de l'image. Vérifiez que ces deux valeurs ne dépassent pas 80000 pixels.
    list($width, $height) = getimagesize($tmpName);
    if ($width <= 80000 && $height <= 80000) {
        echo "Largeur image : " . $width . "<br>";
        echo "Hauteur image : " . $height . "<br>";

        $nom_image = time() . "_" . $name;

        // Déplacer le fichier téléchargé vers le dossier approprié
        $destination = 'images_uploaded/' . $nom_image;
        move_uploaded_file($tmpName, $destination);
        echo "L'image a été téléchargée avec succès.";

        // Placer le lien de l'image dans la base de données
        $sql_requete = "INSERT INTO image (lienImg) VALUES ('$destination');";
        $request = $bdd->query($sql_requete);

        if ($request) {
            echo "Image placée dans la base de données.";
        } else {
            echo "Erreur lors de l'enregistrement dans la base de données.";
        }
    } else {
        echo "L'image dépasse les 80000 pixels.";
    }
}
?>



<!-- Bootstrap form to create a new article -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création nouvel article</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new member -->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">
                <div class="form-group">
                    <!-- titre -->
                    <label for="libTitrArt">Titre de l'article</label>
                    <input id="libTitrArt" name="titreArticle" class="form-control" type="text" autofocus="autofocus" placeholder="100 caractères max" maxlength="100" />
                    <p><br></p>
                    <!-- date création -->
                    <label for="dtCreaArt">Date Création</label>
                    <input type="date" id="dtCreaArt" name="dateArticle">
                    <input type="time" id="dtCreaArt" name= "heureArticle"/>
                    <p><br></p>
                    <!-- chapo -->
                    <label for="libChapoArt">Chapeau</label>
                    <textarea id="libChapoArt" name="Chapo" class="form-control" type="text" autofocus="autofocus" placeholder="Décrivez le chapeau sur 500 caractères" maxlength="500" rows="10" ></textarea>
                    <p><br></p>
                    <!-- accroche -->
                    <label for="libAccrochArt">Accroche</label>
                    <textarea id="libAccrochArt" name="Accroche" class="form-control" type="text" autofocus="autofocus" placeholder="Accroche Paragraphe 1. Sur 100 caractères" maxlength="100" rows="5" ></textarea>
                    <p><br></p>
                    <!-- paragraphe 1 -->
                    <label for="parag1Art">Paragraphe 1</label>
                    <textarea id="parag1Art" name="Paragraphe1" class="form-control" type="text" autofocus="autofocus" placeholder="Décrivez le premier paragraphe sur 1200 caractères." maxlength="1200" rows="20"></textarea>
                    <p><br></p>
                    <!-- sous-titre 1 -->
                    <label for="libSsTitr1Art">Sous Titre paragraphe 2</label>
                    <input id="libSsTitr1Art" name="SousTitre1" class="form-control" type="text" autofocus="autofocus" placeholder="Sous titre du paragraphe 2 sur 100 caractères." maxlength="100" />
                    <p><br></p>
                    <!-- paragraphe 2 -->
                    <label for="parag2Art">Paragraphe 2</label>
                    <textarea id="parag2Art" name="Paragraphe2" class="form-control" type="text" autofocus="autofocus" placeholder="Décrivez le second paragraphe sur 1200 caractères." maxlength="1200" rows="20"></textarea>
                    <p><br></p>
                    <!-- sous-titre 2 -->
                    <label for="libSsTitr2Art">Sous Titre paragraphe 3</label>
                    <input id="libSsTitr2Art" name="SousTitre2" class="form-control" type="text" autofocus="autofocus" placeholder="Sous titre du paragraphe 3 sur 100 caractères." maxlength="100" />
                    <p><br></p>
                    <!-- paragraphe 3 -->
                    <label for="parag3Art">Paragraphe 3</label>
                    <textarea id="parag3Art" name="Paragraphe2" class="form-control" type="text" autofocus="autofocus" placeholder="Décrivez le troisième paragraphe sur 1200 caractères." maxlength="1200" rows="20"></textarea>
                    <p><br></p>
                    <!--  conclusion -->
                    <label for="libConclArt">Conclusion</label>
                    <textarea id="libConclArt" name="Conclusion" class="form-control" type="text" autofocus="autofocus" placeholder="Ecrivez la conclusion sur 800 caractères." maxlength="800" rows="15"></textarea>
                    <p><br></p>
                    <!-- ajout d'une image !-->
                    <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post" enctype="multipart/form-data">
                        <p>Importez une image</p>
                        <input type="file" accept=".jpg, .jpeg, .png, .gif" name="image" />
                        <p>>> Extension des images acceptées : .jpg, .gif, .png, .jpeg <br>(largeur, hauteur, taille max : 80000px, 80000px, 200 000 Go)</p>
                        <input type="submit" value="Enregistrer">
                        <p><br></p>
                    </form>
                    <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">
                    <!-- choix de la thématique !-->
                    <label for="libThem">Thématique :<br></label>
                    <select name="thematique" id="libThem">
                    <option value="">Cliquez et selectionnez une thématique</option>
                    <?php 
                            $result = sql_select('thematique');
                            foreach($result as $req){
                                echo '<option value="' . $req['numThem'] . '">' . $req['libThem'] . '</option>';
                            }
                        ?>
                    </select>
                    <p><br></p>
                    </form>
                    <!-- selection de mots clés dans la liste !--> 
                    <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">
                    <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">
                        <!-- Liste déroulante pour les mots-clés disponibles -->
                        <label for="libMotCle">Mots Clés Disponibles:</label>
                        <p><br></p>
                        <select name="motcle" id="libMotCle" multiple>
                            <!-- Options de mots-clés ici -->
                            <?php 
                                $result = sql_select('motcle');
                                foreach($result as $req){
                                    echo '<option value="' . $req['libMotCle'] . '">' . $req['libMotCle'] . '</option>';
                                }
                            ?>
                        </select>
                        <button type="button" onclick="addKeyword()">Ajouter</button>
                        <p><br></p>
                        <!-- Liste déroulante pour les mots-clés sélectionnés -->
                        <label for="selectMotCle">Mots Clés Sélectionnés:<br></label>
                        <p><br></p>
                        <select name="selectMotCle[]" id="selectMotCle" multiple>
                            <!-- Options de mots-clés sélectionnés ici -->
                        </select>
                        <button type="button" onclick="removeKeyword()">Supprimer</button>
                    </form>
                    <p><br></p>

<!-- Script JavaScript pour manipuler les sélections -->
<script>
    function moveSelectedOptions(fromSelect, toSelect) {
        var selectedOptions = Array.from(fromSelect.selectedOptions);

        selectedOptions.forEach(function(option) {
            toSelect.add(new Option(option.text, option.value));
            option.remove();
        });
    }

    function addKeyword() {
        moveSelectedOptions(document.getElementById('libMotCle'), document.getElementById('selectMotCle'));
    }

    function removeKeyword() {
        moveSelectedOptions(document.getElementById('selectMotCle'), document.getElementById('libMotCle'));
    }
</script>



                    </div>
                <br/>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Confirmer create ?</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include '../../../footer.php';
