<?php 
require '../../header.php';
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    
</body>
</html>
  <section class="form-inscription" style="background-color: #FEF5EA;">
  <link rel="stylesheet" href="../../src/css/inscription.css">
    <div class="title-inscription">
      <h3>En vous inscrivant, vous 
        pourrez liker, partager ou 
        commenter notre contenu
        et intéragir avec les autres
        utilisateurs.</h3>
    </div>
            <!-- Form to create a new statut -->
            <form class="form-group" action="<?php echo ROOT_URL . '/api/security/signup.php' ?>" method="post" id="formCreate">
                <div class="form-group">
                    <!-- PSEUDO -->
                    <div class="box-input">
                    <label for="pseudoMemb" class="p-before-input">Pseudo du membre (non modifiable)</label>
                    <input id="pseudoMemb" name="pseudoMemb" class="form-control" type="text" autofocus="autofocus" />
                    <p>(entre 6 et 70 caractères)</p>
                    </div>
                    <!-- PRENOM -->
                    <div class="box-input">
                    <label for="prenomMemb" class="p-before-input">Prénom du membre</label>
                    <input id="prenomMemb" name="prenomMemb" class="form-control" type="text" autofocus="autofocus" />
                    </div>
                    <!-- NOM -->
                    <div class="box-input">
                    <label for="nomMemb" class="p-before-input">Nom du membre</label>
                    <input id="nomMemb" name="nomMemb" class="form-control" type="text" autofocus="autofocus" />
                    </div>
                    <!-- MDP -->
                    <div class="box-input-mdp">
                        <label for="passMemb">Mot de passe</label>
                        <label class="lab-mdp">
                        <input id="passMemb" name="passMemb" class="form-control" type="password" placeholder="Mot de passe">
    
                        <div class="password-icon">
                            <i data-feather="eye"></i>
                            <i data-feather="eye-off"></i>
                        </div>
                    </label>
                    <p>(Entre 8 et 15 car., au - une majuscule, une minuscule, un chiffre, car. spéciaux acceptés)</p>
                    </div>
                    <!-- MDP VERIFICATION -->
                    <div class="box-input-mdp">
                    <label for="passMemb2">Confirmez le mot de passe du membre</label>
                    <label class="lab-mdp">
                    <input id="passMemb2" name="passMemb2" class="form-control" type="password" autofocus="autofocus" placeholder="Confirmez le mot de passe" />
                    
                    <div class="password-icon">
                            <i data-feather="eye"></i>
                            <i data-feather="eye-off"></i>
                        </div>
                    </label>
                    <p>(Entre 8 et 15 car., au - une majuscule, une minuscule, un chiffre, car. spéciaux acceptés)</p>
                    </div>
                    <!-- EMAIL -->
                    <div class="box-input">
                    <label for="eMailMemb" class="p-before-input">Email du membre</label>
                    <input id="eMailMemb" name="eMailMemb" class="form-control" type="text" autofocus="autofocus" />
                    </div>
                    <!-- EMAIL VERIFICATION -->
                    <div class="box-input">
                    <label for="eMailMemb2" class="p-before-input">Confirmez email du membre</label>
                    <input id="eMailMemb2" name="eMailMemb2" class="form-control" type="text" autofocus="autofocus" />
                    </div>
                    <!-- PARTAGE DES DONNEES -->
                    <div class="condition-valid">
                    <div>
                    <input class="form-check-input" type="checkbox" id="accordMemb" name="accordMemb" value="OUI" />
                    <label class="form-check-label" for="flexCheckDefault">
                    Je consens à ce que mes données fournies dans ce formulaire de contact soient collectées et utilisées conformément à la
                    <a href="/views/frontend/rgpd/politique.php" target="_blank">Politique de Confidentialité de Bibble'S</a>.
                </label>
                    </div>
                    <!-- ACCEPTER -->
                    <div class="box-input-accepte">
                    <input class="form-check-input" type="checkbox" id="accordMemb2" name="accordMemb2" value="OUI" />
                    <label for="accordMemb2">J'accepte les <a href="/views/frontend/rgpd/cgu.php" target="_blank">conditions générales d'utilisation</a></label>
                    </div>
                    <div>
                    <!-- STATUT -->
                    <input id="numStat" name="numStat" class="form-control" style="display: none" type="text" value="3" readonly="readonly" />
                    <!-- COOKIES -->
                    <div class="valid form-check">
                        <input class="form-check-input" type="checkbox" value="" id="cookies">
                        <label class="form-check-label" for="cookies">
                            Se souvenir de moi
                        </label>
                    </div>
                    <div class="box-button">
                    <div class="div-inscription">
                        <button type="submit" class="inscription">Inscription</button>
                    </div>
                <div class="div-connexion">
                    <a href="./connexion.php" class="link-opacity-100">Déjà inscrit ?</a>
                    <a href="./connexion.php" style="text-decoration: none;">
                        <button type="button" class="connect">Connexion</button>
                    </a>
                </div>
                </div>
            </form>
  </section>

<?php 
require '../../footer.php';
?>

    <!-- ICON SCRIPT -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>
    <script>
        const eye = document.querySelector(".feather-eye");
        const eyeoff = document.querySelector(".feather-eye-off");
        const passwordField = document.querySelector("input[type=password]");

        eye.addEventListener("click", () => {
            eye.style.display = "none";
            eyeoff.style.display = "block";

            passwordField.type = "text";
        });

        eyeoff.addEventListener("click", () => {
            eyeoff.style.display = "none";
            eye.style.display = "block";

            passwordField.type = "password";
        });
    </script>
</body>

        