<?php
require '../../header.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bord'Animaux - Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min">
    <link rel="stylesheet" href="../../src/css/inscription.css">
    <link rel="icon" href="../médias/logo bibble's header.png">
</head>

<body>
    <section class="form-inscription" style="background-color: #FEF5EA;">

        <div class="title-inscription">
            <h3>En vous inscrivant, vous <br>
                pourrez liker, partager ou <br>
                commenter notre contenu
                et intéragir avec les autres
                utilisateurs</h3>
        </div>
        <div class="email">
            <p for="exampleFormControlInput1" class="col-form-label">Email :</p>
            <br>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@exemple.com">
        </div>
        <div class="motdepasse">
            <div class="col-auto">
                <p for="inputPassword6" class="col-form-label">Mot de passe :</p>
            </div>
            <div class="col-auto">
                <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                    La longueur doit être comprise entre 8 et 20 caractères.
                </span>
            </div>
        </div>
        <div class="motdepasse">
            <div class="col-auto">
                <p for="inputPassword6" class="col-form-label">Confirmer votre mot de passe :</label>
            </div>
            <div class="col-auto">
                <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                    La longueur doit être comprise entre 8 et 20 caractères.
                </span>
            </div>
        </div>
        <div class="valid">

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <p class="form-check-label" for="flexCheckDefault">
                    M'abonner à la Newsletter
                    </label>
            </div>


            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <p class="form-check-label" for="flexCheckDefault">
                    Accepter les CGU
                    </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <p class="form-check-label" for="flexCheckDefault">
                    Se souvenir de moi
                    </label>
            </div>

            <button type="button-important" class="inscription no-border">S'inscrire</button>
            <p><a class="link-opacity-100" href="#">Déjà un compte ?</a></p>
            <button type="button-less-important" class="connect border">Se connecter</button>
        </div>
    </section>
    <?php
    require '../../footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>