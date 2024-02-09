<?php
    require_once 'header.php';
    $article1 = sql_select('ARTICLE', '*', "numArt = '1'")[0];
    $libTitrArt1 = $article1['libTitrArt'];
    $libChapoArt1 = $article1['libChapoArt'];
    $article2 = sql_select('ARTICLE', '*', "numArt = '2'")[0];
    $libTitrArt2 = $article2['libTitrArt'];
    $libChapoArt2 = $article2['libChapoArt'];
    
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bord'Animaux</title>
    <link rel="shortcut icon"  href="/src/images/logo bibble's header.webp" type="image/x-icon" />
    <link rel="stylesheet" href="/src/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main>
    <?php if (isset($_SESSION["pseudo"])) {
    // Affichez "Bonjour pseudo" avec une taille de police de 20 pixels
    echo '<p style="font-size: 20px;">Bonjour ' . $_SESSION["pseudo"] . '</p>';
} ?>


        <section class="container col-12 col-sm-8 hero">
            <p>La Belle Endormie, malgré son surnom, est une ville qui a du chien ! Il est pourtant parfois difficile de
                connaître les actions et infrastructures mises en place pour le bien-être et la préservation des animaux
                dans Bordeaux.

                Si vous souhaitez en savoir plus, Bord'animaux est là pour ça : entre interviews, événements et
                recensement d'associations, tous nos articles sont là pour vous rappeler qu'à Bordeaux, nos animaux
                peuvent prospérer !</p>

            <a href="/views/frontend/articles/faq.php" class="faq">
                <button>
                    Voir la FAQ <span> &#10140;</span>
                </button>
            </a>
        </section>
        <section class="section-article" id="articles">
            <h2 class="h2-article">Nos Articles</h2>
            <div class="card-article">
                <!-- Article 1 -->
                <div class="card1">
                    <img src="./src/images/francis-feytout.webp" class="card-img-top" alt="Francis Feytou">
                    <!-- Partie texte du premier article -->
                    <div class="card-body">
                        <h2 class="card-title">PORTRAIT</h2>
                        <h3 class="card-subtitle"><?php echo $libTitrArt2; ?></h3>
                        <p class="card-text"><?php echo $libChapoArt2; ?></p>
                        <!-- Bouton du premier article -->
                        <a href="/views/frontend/articles/interview.php?numArt=2" class="btn_btn-primary">Lire la suite &#10140;</a>
                    </div>
                </div>
                <!-- Article 2 -->
                <div class="card1">
                    <img src="./src/images/croquettes.webp" class="card-img-top" alt="La marche">
                    <!-- Partie texte du deuxième article -->
                    <div class="card-body">
                        <h2 class="card-title">EVENEMENT</h2>
                        <h3 class="card-subtitle"><?php echo $libTitrArt1; ?></h3>

                        <p class="card-text"><?php echo $libChapoArt1; ?></p>
                        <!-- Bouton du deuxième article -->
                        <a href="/views/frontend/articles/evenement.php?numArt=1" class="btn_btn-primary">Lire la suite &#10140;</a>
                    </div>
                </div>
            </div>
            <!-- insérer le boostrap et faire les boutons -->
        </section>

        <section class="container association">
            <div class="row">
                <div class="container col-12 col-sm-10 asso-container">
                    <article class="article">
                        <h2>Avoir un animal sur Bordeaux,
                            c'est possible grâce aux différents aménagements ! </h2>
            
                            <a href="/views/frontend/articles/interview.php?numArt=2">
                                <img src="./src/images/aménagements-animal.webp" alt="chien guide">
                            </a>
                        <a href="/views/frontend/articles/interview.php?numArt=2">
                            <button>
                                En savoir plus <span> &#10140;</span>
                            </button>
                        </a>
                    </article>
                    <article class="article">
                        <h2>Les différentes associations et refuges bordelais </h2>
                        <a href="#">
                            <img src="./src/images/associations et refuges.webp" alt="association spa">
                        </a>
                        <a href="#">
                            <button>
                                En savoir plus <span> &#10140;</span>
                            </button>
                        </a>
                    </article>
                </div>
                </div>
                </section>
                
                <section class="container col-12 col-sm-8 who">
                    <h2>Qui sommes nous ?</h2>
            <p>Nous sommes une équipe de choc qui se tient à l'affut des actualités et événements sur Bordeaux pour
                répondre aux mieux à toutes vos questions. Nous sommes des étudiants en première année d'études
                supérieures dans les métiers du Multimédia et d'Internet.

                Notre équipe Bibble's est constitué de rédacteurs web , UX researcher , experts de l'ergonomie ,
                designer web et développeur front / back.
                Nous faisons du mieux qu'on peut pour vous assurer une navigation agréable sur notre site.

                Notre objectif est de permettre à des amateurs ou spécialistes de la cause animale, d'échanger,
                d'intéragir avec les autres visiteurs de ce site pour apprendre et découvrir tout ce qu'il se fait sur
                la ville de Bordeaux.

                La cohésion, l'esprit d'équipe, l'accessibilité, le respect de tous et le bien être animal font parties
                intégrantes de notre travail et de nos valeurs.

                De même, nous voulons faire de vous une priorité. Ainsi, nous faisons toujours du mieux qu'on peut pour
                répondre à vos besoins et vous permettre de profiter du mieux que vous pouvez des dispositifs bordelais.
            </p>
            <div class="portrait">
                <a href="https://www.linkedin.com/in/eve-tissot-a18a60295/">
                    <img src="./src/images/eve.webp" width="60" height="60" alt="Eve Tissot">
                </a>
                <a href="https://billeltighidet.com/">
                    <img src="./src/images/moi-linkedin-1.webp" width="60" height="60" alt="Billel Tighidet">
                </a>
                <a href="https://www.linkedin.com/in/antoine-corberand-49898b294/">
                    <img src="./src/images/antoine-corberand.webp" width="60" height="60" alt="Antoine Corberand">
                </a>
                <a href="https://www.linkedin.com/in/surget-camille-bordeaux/">
                    <img src="./src/images/camille.webp" width="60" height="60" alt="Camille Surget">
                </a>
                <a href="https://www.linkedin.com/in/antoine-courcaud/">
                    <img src="./src/images/antoine courcaud.webp" width="60" height="60" alt="Antoine Courcaud">
                </a>
            </div>
        </section>
        <section class="container contact-faq">
            <h3 class="h3-contact-faq">Contactez nous</h3>
            <!-- partie formulaire -->
            <!-- Nom -->
            <form action="/ma-page-de-traitement" method="post">
                <ul class="ul-contact-faq">
                    <li class="input-group1">
                        <label for="name" class="input-group-text1">Prénom&nbsp;:</label>
                        <input type="text" class="form-control1" id="name" name="user_name" placeholder=" Ex: Jean" />
                    </li>
                    <li class="input-group1">
                        <label for="name" class="input-group-text1">Nom&nbsp;:</label>
                        <input type="text" class="form-control1" id="name" name="user_name" placeholder=" Ex: Dupont" />
                    </li>
                    <li class="input-group1">
                        <label for="mail" class="input-group-text1">E-mail&nbsp;:</label>
                        <input type="email" class="form-control1" id="mail" name="user_mail" placeholder=" Ex: name@exemple.com" />
                    </li>
                    <li class="input-group1">
                        <label for="msg" class="input-group-text1">Message&nbsp;:</label>
                        <textarea id="msg" name="user_message" class="form-control1" placeholder=" Message..."></textarea>
                    </li>
                </ul>
            </form>
            <!-- Politique d econfidentialité à accepter en cochant -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Je consens à ce que mes données fournies dans ce formulaire de contact soient collectées et utilisées conformément à la
                    <a href="/views/frontend/rgpd/politique.php" target="_blank">Politique de Confidentialité de Bibble'S</a>.
                </label>

            </div>
            <!-- Bouton envoyer -->
            <div class="bouton-faq">
                <button type="button" class="btn_btn-primary1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Envoyer &#10140;
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button type="button" class="btn btn-primary">Sauvegarder</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
        <?php require_once 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>