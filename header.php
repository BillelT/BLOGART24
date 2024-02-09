<?php
// CREE SESSION DE CONNEXION
session_start();
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/src/images/logo bibble's header.png" type="image/x-icon" />
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
            <a href="/index.php">
                <img src="/src/images/logo bibble's header.png" alt="logo Bibbe'S" width="30" height="30">
            </a>
            <nav class="nav" id="nav">
                <ul>
                    <!-- <li>
                        <a href="#" class="connected" id="connected">Mon profil <span>&#8594;</span></a>
                    </li> -->
                    <li>
                        <a href="/index.php#articles">Articles <span>&#8594;</span></a>
                    </li>
                    <li>
                        <a href="#">Témoignages <span>&#8594;</span></a>
                    </li>
                    <li class="no-border">
                        <?php
                        if (isset($_SESSION['numStat'])) {
                            $session = $_SESSION['numStat']; // STATUT DANS $SESSION

                        } else {
                            $session = 4;
                        }
                        // SI STAT = ADMIN
                        if ($session == 1) {
                            echo '<a href="/views/backend/dashboard.php" id="dashboard"><button class="inscription" id="dashboard" type="submit">Dashboard <span>&#8594;</span></button> </a>';
                        }
                        // SI STAT = MOD OU MEMBRE 
                        if ($session == 2 || $session == 3) {
                            echo '<a href="/views/frontend/profil.php" id="profil"><button class="inscription" id="profil" type="submit">Mon Profil <span>&#8594;</span></button></a>';
                        }
                        // SI PAS DE STAT
                        if ($session != 1 && $session != 2 && $session != 3) {
                            echo '<a href="/views/frontend/inscription.php" id="register"><button class="inscription" type="submit">S\'inscrire<span>&#8594;</span></button></a>';
                        }
                        ?>
                    </li>
                    <?php
                    if (isset($_SESSION['numStat'])) {
                        $session = $_SESSION['numStat']; // STATUT DANS $SESSION
                    }
                    // SI STAT = ADMIN
                    if ($session == 1) {
                        echo '<li><a href="/views/frontend/profil.php"><button class="connect" type="submit">Mon profil <span>&#8594;</span></button></a></li>';
                    }
                    // SI PAS DE STAT
                    if ($session != 1 && $session != 2 && $session != 3) {
                        echo '<li><a href="/views/frontend/connexion.php"><button class="connect" id="connect" type="submit">Se connecter<span>&#8594;</span></button></a></li>';
                    }
                    ?>
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
    <?php
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";

    $domain = $_SERVER['HTTP_HOST'];
    $port = $_SERVER['SERVER_PORT'];
    $uri = $_SERVER['REQUEST_URI'];
    $url = "$protocol://$domain";
    $ariane = explode("/",$test);
    $motAriane = end($ariane);
    echo "<div class='ariane'> <a href='/index.php'> Accueil </a> <p> > <p> </div>";
    var_dump($ariane);
    var_dump($motAriane);
    ?>
    <script src="/src/JS/header.js"></script>
</body>

</html>