<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog'Art</title>
    <!-- Load CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="src/css/style.css" />
    <link rel="stylesheet" href="./src/css/header.css">
    <!-- Bootstrap CSS only -->
    <link rel="shortcut icon" type="image/x-icon" href="src/images/article.png" />
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
            <img src="./src/images/logo bibble's header.png" alt="logo Bibbe'S" width="30" height="30">
            <nav class="nav" id="nav">
                <ul>
                    <li>
                        <a href="#" class="connected" id="connected">Mon profil <span>&#8594;</span></a>
                    </li>
                    <li>
                        <a href="#">Articles <span>&#8594;</span></a>
                    </li>
                    <li>
                        <a href="#">Témoignages <span>&#8594;</span></a>
                    </li>
                    <li class="no-border">
                        <a href="#">
                            <button class="inscription" id="inscription">
                                S'inscrire <span>&#8594;</span>
                            </button>
                        </a>
                    </li>
                    <li class="no-border">
                        <a href="#">
                            <button class="connect" id="connect">
                                Se connecter <span>&#8594;</span>
                            </button>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="search" id="search">
                <p>Rechercher...</p>
                <img src="./src/images/loupe header.svg" alt="loupe icon">
            </div>
            <span class="burger" id="burgerMenu">☰</span>
        </div>
        <h1>BORD'ANIMAUX</h1>
        <h2>par l'équipe Bibble'S</h2>
    </header>
    <div class="ariane">
        <p>Accueil</p>
    </div>
    <script src="./src/js/header.js"></script>
</body>
</html>