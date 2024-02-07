<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>connexion</title>
  <link rel="stylesheet" href="../css/connexion.css">
  <link rel="shortcut icon"  href="/src/images/logo bibble's header.png" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min">
  <link
    href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400&display=swap"
    rel="stylesheet">
</head>

<body>

<?php 
require '../../header.php';
?>
  <section class="connexion" style="background-color: #FEF5EA;">

    <div class="title-connexion">
      <h3>En vous connectant, vous <br>
        pourrez liker, partager ou <br>
        commenter notre contenu
        et intéragir avec les autres
        utilisateurs</h3>
    </div>
    <div class="email">
      <label for="exampleFormControlInput1" class="col-form-label">Email :</label>
      <br>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@exemple.com">
    </div>
    <div class="motdepasse">
      <div class="col-auto">
        <label for="inputPassword6" class="col-form-label">Mot de passe :</label>
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
        <label class="form-check-label" for="flexCheckDefault">
          Se souvenir de moi
        </label>
      </div>

      <button type="button-important" class="button-important">Se connecter</button>
      <p><a class="link-opacity-100" href="#">Déjà un compte ?</a></p>
      <button type="button-less-important" class="button-less-important">Inscription</sbutton>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

    <?php 
require '../../footer.php';
?>
</body>