<?php 
require '../../header.php';

?>
<html lang="fr">
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon Profil</title>
  <link rel="stylesheet" href="../css/profil.css">
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
        <h2><?php echo $_SESSION["pseudo"]; ?>.</h2>
    </div>

    <div>
      <p class="inscription-date">
        Vous êtes inscrit depuis le <?php echo $_SESSION["dtCreaMemb"]; ?>
      </p>
    </div>
    <div class="nom">
      <p for="exampleFormControlInput1" class="col-form-label">Nom :</p>
      <p class="col-form-label name"> <?php echo $_SESSION["nomMemb"]; ?></p>
    </div>

    <div class="prenom">
      <p for="exampleFormControlInput1" class="col-form-label">Prenom :</p>
      <p class="col-form-label name"> <?php echo $_SESSION["prenomMemb"]; ?> </p>
    </div>

    <div class="email">
      <p for="exampleFormControlInput1" class="col-form-label">Email :</p>
      <p class="col-form-label name"><?php echo $_SESSION["eMailMemb"]; ?> </p>
    </div>
    <p><a class="link-opacity-100" href="#">Supprimer votre compte ?</a></p>
  </section>
  <?php 
require '../../footer.php';
?>
</body>