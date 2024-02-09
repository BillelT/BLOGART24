<?php 
require '../../header.php';
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    
</body>
</html>
  <link rel="stylesheet" href="../../src/css/connexion.css">
  <section class="connexion" style="background-color: #FEF5EA;">

  <div class="title-connexion">
      <h3>En vous connectant, vous 
        pourrez liker, partager ou 
        commenter notre contenu
        et intéragir avec les autres
        utilisateurs.</h3>
    </div>

    

<!-- Bootstrap form to create a new statut -->

            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/security/connexion.php' ?>" method="post">
            <div class="div-formulaire">
                <div class="form-group email">
                    <label for="pseudoMemb" class="col-form-label">Pseudo:</label>
                    <input id="pseudoMemb" name="pseudoMemb" class="form-control" type="text" autofocus="autofocus" />
                </div>

                <div class="form-group motdepasse col-auto">
                <label>Mot de passe :</label>
                <label class="lab-mdp">
                    <input id="passMemb" name="passMemb" class="form-control" type="password" placeholder="Mot de passe">
    
                    <div class="password-icon">
                        <i data-feather="eye"></i>
                        <i data-feather="eye-off"></i>
                    </div>
                </label>

                    <div class="condition-mdp">
                        <span id="passwordHelp" class="form-text">
                        La longueur doit être comprise entre 8 et 20 caractères.
                        </span>
                    </div>
                </div>
            </div>

                <div class="valid form-check">
                <input class="form-check-input" type="checkbox" value="" id="cookies">
                <label class="form-check-label" for="cookies">
                    Se souvenir de moi
                </label>
                </div>
                <br />
                <div class="div-button">
                    <div class="div-connexion">
                    <div class="div-no-compte">
                        <a href="/views/frontend/inscription.php" style="text-decoration: none;">
                            <button type="button" class="connect">Inscription</button>
                        </a>
                        <a href="/views/frontend/inscription.php">
                            <p class="link-opacity-100">Pas de compte ?</p>
                        </a>
                    </div>
                        <button type="submit" class="inscription">Connexion</button>
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

</html>

        