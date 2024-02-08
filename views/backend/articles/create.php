<?php
require_once '../../../header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création nouveau Article</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post" id="form">
                <div class="form-group">
                    <label for="libStat">Titre</label>
                    <input id="titre" name="libTitrArt" class="form-control" type="text" autofocus="autofocus" placeholder="Sur 100 car.">
                    <br>
                    <label for="libStat">Date création</label>
                    <input id="Datecreation" name="dtCreaArt" class="form-control" type="datetime-local" autofocus="autofocus" placeholder="jj/mm/aaaa">
                    <br>
                    <label for="libStat">Chapeau</label>
                    <textarea id="Chapeau" name="libChapoArt" class="form-control" placeholder="Décrivez le chapeau. Sur 500 caractères." maxlength="500" style="height: 200px;"></textarea>
                    <br>
                    <label for="libStat">Accroche paragraphe 1</label>
                    <input id="Accroche1" name="libAccrochArt" class="form-control" type="text" autofocus="autofocus" maxlength="100" placeholder="">
                    <br>sur 100 car.
                    <label for="libStat">Paragraphe 1</label>
                    <textarea id="Paragraphe1" name="parag1Art" class="form-control" placeholder="Décrivez le premier paragraphe. Sur 1200 car." maxlength="1200" style="height: 200px;"></textarea>
                    <br>
                    <label for="libStat">Sous-titre 1</label>
                    <input id="Soustitre1" name="libSsTitr1Art" class="form-control" type="text" autofocus="autofocus" maxlength="100" placeholder="Sur 100 car.">
                    <br>
                    <label for="libStat">Paragraphe 2</label>
                    <textarea id="Paragraphe2" name="parag2Art" class="form-control" placeholder="Décrivez le deuxième paragraphe. Sur 1200 car." maxlength="1200" style="height: 200px;"></textarea>
                    <br>
                    <label for="libStat">Sous-titre 2</label>
                    <input id="Soustitre2" name="libSsTitr2Art" class="form-control" type="text" autofocus="autofocus" maxlength="100" placeholder="Sur 100 car.">
                    <br>
                    <label for="libStat">Paragraphe 3</label>
                    <textarea id="Paragraphe3" name="parag3Art" class="form-control" placeholder="Décrivez le troisième paragraphe. Sur 1200 car." maxlength="1200" style="height: 200px;"></textarea>
                    <br>
                    <label for="libStat">Conclusion</label>
                    <textarea id="Conclusion" name="libConclArt" class="form-control" placeholder="Décrivez la conclusion. Sur 800 car." maxlength="500" style="height: 200px;"></textarea>
                    <br>


                    <!-- image !-->
                    <label for="imageInput">Choisir une image :</label>
                    <input type="file" id="urlPhotArt" name="urlPhotArt" accept=".jpg, .jpeg, .png, .gif" maxlength="80000" width="80000" height="80000" size="200000000000">

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
                            const addMotCle = document.getElementById('addMotCle');
                            const newMotCle = document.getElementById('newMotCle');
                            const options = addMotCle.options;
                            const addOptions = newMotCle.options;
                            var formulaire = document.getElementById("form");
                            var champTableau = document.createElement("input");
                            let bool = false;
                            let motCle = [];


                            document.addEventListener('click', (e) => {
                                if (!e.target.innerText.includes(' ')) {
                                    for (let i = 0; i < options.length; i++) {
                                        if (e.target.innerText === options[i].innerText && !motCle.includes(e.target.innerText)) {
                                            let newOption = document.createElement('option');
                                            bool = true;
                                            motCle.push(options[i].innerText);
                                            newOption.value = e.target.innerText;
                                            newOption.id = 'mot';
                                            newOption.innerText = e.target.innerText;
                                            newMotCle.appendChild(newOption);
                                            options[i].remove();
                                            break;
                                        } else {
                                            bool = false;
                                        }
                                    }
                                    Object.entries(addOptions).forEach(([key, option]) => {
                                        if (bool === false && option.innerText === e.target.innerText && motCle.includes(e.target.innerText)) {
                                            motCle.splice(option, 1);
                                            let newOption = document.createElement('option');
                                            newOption.value = e.target.innerText;
                                            newOption.id = 'mot';
                                            newOption.innerText = e.target.innerText;
                                            addMotCle.add(newOption);
                                            option.remove();
                                        }
                                    });
                                }
                            })
                        </script>
                    </select>
                </div>
                <br>
                <div class="form-group mt-2" style="margin: 32px auto 128px;">
                    <button type="submit" class="btn btn-primary ">Confirmer create ?</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
include '../../../footer.php';
?>
<!-- fetch('create.php', {
    method: 'POST',
    body: JSON.stringify({
        motCle: motCle
    }),
    headers: {
        'Content-Type': 'application/json'
    }
}); -->