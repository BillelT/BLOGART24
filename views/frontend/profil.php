<?php 
require '../../header.php';
?>
<html lang="fr">
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon Profil</title>
  <link rel="stylesheet" href="../../src/css/profil.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min">
  <link
    href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400&display=swap"
    rel="stylesheet">
</head>

<body class="body">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <section class="profil" style="background-color: #FEF5EA;">

    <div class="title-profil">
      <h2>Bienvenue, </h2>
        <h2>jeanjeandu33.</h2>
    </div>

    <div>
      <p class="inscription-date">
        Vous êtes inscrit depuis le 23/25/3045 
      </p>
    </div>
    <div class="nom">
      <p for="exampleFormControlInput1" class="col-form-label">Nom :</p>
      <p class="col-form-label name"> Jeannot</p>
    </div>

    <div class="prenom">
      <p for="exampleFormControlInput1" class="col-form-label">Prenom :</p>
      <p class="col-form-label name"> Jean </p>
    </div>

    <div class="email">
      <p for="exampleFormControlInput1" class="col-form-label">Email :</p>
      <p class="col-form-label name"> jeandu33@gmail.com </p>
    </div>
    <div style="text-align: center; padding-bottom:16px; ">
      <button type="button-less-important" class="connect">Modifier</sbutton>
    </div>
    <a class="link-opacity-100" style="padding-bottom:64px;" href="#">Supprimer votre compte ?</a>
  </section>
  <?php 
require '../../footer.php';
?>
</body>