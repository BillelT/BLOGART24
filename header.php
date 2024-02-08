<?php 
// CREE SESSION DE CONNEXION
session_start();
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog'Art</title>
    <link rel="shortcut icon"  href="/src/images/logo bibble's header.png" type="image/x-icon" />
    <!-- Load CSS -->
    <link rel="stylesheet" href="/src/css/header.css">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- CAPTCHA GOOGLE --> 
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<?php
//load config
require_once 'config.php';
?>
<body>
<header>
        <div class="navigation" id="headNav">
            <a href="./index.php">
                <img src="/src/images/logo bibble's header.png" alt="logo Bibbe'S" width="30" height="30">
            </a>
            <nav class="nav" id="nav">
                <ul>
                    <!-- <li>
                        <a href="#" class="connected" id="connected">Mon profil <span>&#8594;</span></a>
                    </li> -->
                    <li>
                        <a href="#">Articles <span>&#8594;</span></a>
                    </li>
                    <li>
                        <a href="#">Témoignages <span>&#8594;</span></a>
                    </li>
                    <li class="no-border">
                        <a href="#">
                            

                            <button class="inscription" id="inscription">
                                <?php
                                if (!isset($_SESSION['numArt']) || ($_SESSION['numArt'] == 1 )){
                                    //si l'utilisateur est admin
                                    echo 'Dashboard <span>&#8594;</span>';
                                    echo '<a href="/views/frontend/inscription.php"></a>';
                                } 
                                if (!isset($_SESSION['numArt']) || ($_SESSION['numArt'] == 3 && $_SESSION['numArt'] == 2 )) {
                                     // Si l'utilisateur n'est pas membre
                                     echo 'S\'inscrire <span>&#8594;</span>';
                                     echo '<a href="/views/frontend/inscription.php"></a>';

                                }
                                ?>
                            </button>

                        </a>
                    </li>
                    <li class="no-border">
                        <a href="../../views/frontend/connexion.php">

                            <button class="connect" id="connect">
                                <?php
                                if (!isset($_SESSION['numArt']) || ($_SESSION['numArt'] == 3 && $_SESSION['numArt'] == 2 )) {
                                    // Si l'utilisateur est membre
                                    echo 'Mon profil <span>&#8594;</span>';
                                    // Lien vers le profil des utilisateurs avec le statut membre ou modificateur
                                    echo '<a href="/views/frontend/profil.php"></a>';

                                } else if (!isset($_SESSION['numArt']) || ($_SESSION['numArt'] == 1 )){
                                    //si l'utilisateur est admin
                                    echo 'Dashboard <span>&#8594;</span>';
                                    echo '<a href="/views/frontend/inscription.php"></a>';
                                } else {
                                     // Si l'utilisateur n'est pas membre
                                     echo 'Se connecter <span>&#8594;</span>';
                                     echo '<a href="/views/frontend/connexion.php"></a>';

                                }
                                ?>
                            </button>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="search" id="search">
                <p>Rechercher...</p>
                <img src="/src/images/loupe header.svg" alt="loupe icon">
            </div>
            <span class="burger" id="burgerMenu">☰</span>
        </div>
        <h1>BORD'ANIMAUX</h1>
        <h2>par l'équipe Bibble's</h2>
    </header>
    <div class="ariane">
        <p>Accueil</p>
    </div>
    <script src="/src/JS/header.js"></script>
</body>
</html>