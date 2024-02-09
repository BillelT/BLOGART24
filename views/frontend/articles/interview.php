<?php 
   require '../../../header.php';
   require_once '../../../functions/ctrlSaisies.php';

   if (isset($_GET['numArt'])){
    $numArt = $_GET['numArt'];
    $article = sql_select('ARTICLE', '*', "numArt ='$numArt'")[0];
    $dtCreaArt = $article['dtCreaArt'];
    $libTitrArt = $article['libTitrArt'];
    $libChapoArt = $article['libChapoArt'];
    $libAccrochArt = $article['libAccrochArt'];
    $parag1Art = $article['parag1Art'];
    $parag1Art = BBCode($parag1Art);
    $libSsTitr1Art = $article['libSsTitr1Art'];
    $parag2Art = $article['parag2Art'];
    $parag2Art = BBCode($parag2Art);
    $libSsTitr2Art = $article['libSsTitr2Art'];
    $parag3Art = $article['parag3Art'];
    $parag3Art = BBCode($parag3Art); 
    $libConclArt = $article['libConclArt'];
    $urlPhotArt = $article['urlPhotArt'];
    $numThem = $article['numThem'];
   } else {
    header('/index.php');
   }    
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bord'animaux</title>
    <link rel="stylesheet" href="/src/css/article-interview.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body class="body">
    <!-- header de la page -->
    <!-- avant le paragraphe -->
    <div class="before-para">
        <h1 class="text-center"><?php echo $libTitrArt; ?></h1>
        <div class="text-center"><a class="button-lire" href="#scroll"><button>En lire plus ?</button></a></div>
        <h2 id="scroll"><?php echo $libAccrochArt; ?></h2>
        <img src="../../../src/images/<?php echo $urlPhotArt;?>" alt="francis feytout">
        <p>Catégorie : Portrait<br>
        <?php echo $dtCreaArt; ?>
        </p>
    </div>
    <!-- Section article -->
    <section class="para-article">
        <!-- div qui englobe le premier texte -->
        <div>
            <!-- le header de la section -->
            <div class="div1-para-article">
                <h3>Table des matières</h3>
                <ol class="list-group list-group-numbered"><li class="list group-item">Pourquoi est-si difficile de nourrir les animaux actuellement ?</li>
                <li class="list group-item">Une solution apportée par un événement : la Marche des Croquettes...</li>
                <li class="list group-item">dans le cadre de la Journée mondiale contre l'abandon !</li></ol>
            </div>
            <!-- partie "body 1" de la section -->
            <div>
                <!-- premier paragraphe de la page article -->
                <div class="container-paragraph">
                    <div class="div-guimet">
                        <img class="guimet-gauche" src="../../../src/images/guimet-gauche.svg" alt="petit guimet">
                        <h3>Les gens donnent de moins en moins [...] en raison de l'inflation</h3>
                        <img class="guimet-droite" src="../../../src/images/guimet-droite.svg" alt="petit guimet">
                    </div>
                    <div class="div-text-art">
                        <p><strong><?php echo $libChapoArt; ?></strong>
                        </p>
                        <p> <?php echo $parag1Art; ?>
                    </div>
                </div>
                <!-- Petit texte avec les petites icones svg au dessus et en dessous -->
            </div>
        </div>
        <!-- deuximème paragraphe de l'article -->
        <div >
            <!-- le "header" de la section -->
            <div class="title-art">
                <h3><?php echo $libSsTitr1Art; ?></h3>
            </div>
            <!-- partie "body 1" de la section -->
            <div >
                <!-- paragraphe de la page article -->
                <div class="container-paragraph">
                    <!-- Petit texte avec les petites icones svg au dessus et en dessous -->
                    <div class="div-guimet">
                        <img class="guimet-gauche" src="../../../src/images/guimet-gauche.svg" alt="petit guimet">
                        <h3>Chaque kilomètre parcouru est un repas offert aux animaux des refuges.</h3>
                        <img class="guimet-droite" src="../../../src/images/guimet-droite.svg" alt="petit guimet">
                    </div>
                    <div class="div-text-art">
                        <p> <?php echo $parag2Art; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- troisième paragraphe de l'article -->
        <div>
            <!-- le "header" de la section -->
            <div class="title-art">
                <h3><?php echo $parag2Art; ?></h3>
            </div>
            <!-- partie "body 1" de la section -->
            <div>
                <!--     paragraphe de la page article -->
                <div class="container-paragraph">
                    <div class="div-guimet">
                        <img class="guimet-gauche" src="../../../src/images/guimet-gauche.svg" alt="petit guimet">
                        <h3>Toutes les deux minutes, un animal est abandonné</h3>
                        <img class="guimet-droite" src="../../../src/images/guimet-droite.svg" alt="petit guimet">
                    </div>
                    <div class="div-text-art">
                        <p> <?php echo $parag3Art; ?>
                        </p>
                    </div>
                </div>
                <!-- Petit texte avec les petites icones svg au dessus et en dessous -->
            </div>
        </div>
        <!-- Conclsion du paragraphe de l'article -->
        <div>
            <!-- partie "body 1" de la section -->
            <div class="container-paragraph">
                <!--     paragraphe de la page article -->
                <!-- Petit texte avec les petites icones svg au dessus et en dessous -->
                <div class="div-text-art">
                    <p> <?php echo $libConclArt; ?>
                    </p>
                </div>
            </div>
        </div>
        <!-- mots-clefs -->
        <div class="container-mot-clef">
            <h3>MOTS-CLÉS</h3>
            <div class="div-mot-clef">
            <ul class="list-group list-group-horizontal">
            <?php 
            $motcle = sql_select('MOTCLE INNER JOIN MOTCLEARTICLE ON motcle.numMotCle = motclearticle.numMotCle
                INNER JOIN ARTICLE ON motclearticle.numArt = article.numArt', '*', "article.numArt ='$numArt'");
                foreach ($motcle as $mot){
                echo '<li class="list-group-item">' . $mot['libMotCle'] . '</li>';
            }
?>
            </ul>
            </div>
        </div>
        <!-- les sources -->
        <div>
            <h3>SOURCES</h3>
            <div class="links">
                <a href="https://marchedescroquettes.com/">Marche des croquettes, le site officiel</a>
                <a href="https://www.solidarite-peuple-animal.com/">Solidarité Peuple animal, le site officiel</a>
                <a href="https://www.francebleu.fr/infos/economie-social/la-marche-des-croquettes-a-bordeaux-pour-
                     lutter-contre-la-flambee-des-prix-sur-l-alimentation-animale-4457357">Lutter contre la flambée
                    des prix sur l'alimentation animale, article de FranceBleu</a>
            </div>
        </div>
        <!-- Partie bouton -->
        <div class="buttons">
            <a href="#"></a>
            <button type="button" class="bouton-like"><img src="../../../src/images/like.svg">Like</button>
            </a>
            <a href="#"></a>
            <button type="button" class="bouton-partager"><img src="../../../src/images/partager.svg">partager</button>
            </a>
            <a href="#"></a>
            <button type="button" class="bouton-commentaire"><img src="../../../src/images/commenter.svg">Commentaire</button>
            </a>
        </div>

    </section>
    <!-- lien vers le deuxième article -->
    <section class="autre-article">
        <h2 class="h2-article">Nos Articles</h2>
        <!-- Article 1 -->
        <div class="card-article">
            <div class="card1">
                <img src="../../../src/images/francis-feytout.webp" class="card-img-top" alt="tête de Francis">
                <!-- Partie texte du premier article -->
                <div class="card-body">
                    <h2 class="card-title"><?php $article2 = sql_select('ARTICLE', '*', "numArt = '1'")[0];
                    $libTitrArt2 = $article2['libTitrArt'];
                    $libChapoArt2 = $article2['libChapoArt'];
                    $libAccrochArt2 = $article2['libAccrochArt'];
                    echo $libTitrArt2;?> </h2>
                    <h3 class="card-under-title"><?php echo $libChapoArt; ?></h3>
                    <p class="card-text"><?php echo $libAccrochArt2; ?></p>
                    <!-- Bouton du premier article -->
                    <a href="#" class="btn_btn-primary">Lire la suite &#10140;</a>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-faq">
        <h3>Contactez nous</h3>
        <!-- partie formulaire -->
        <!-- Nom -->
        <form action="/ma-page-de-traitement" method="post">
            <ul class="ul-contact-faq">
                <li class="input-group1">
                    <label for="msg" class="input-group-text1">Message&nbsp;:</label>
                    <textarea id="msg" name="user_message" class="form-control2" placeholder=" Message..."></textarea>
                </li>
            </ul>
        </form>
        <!-- Bouton envoyer -->
        <div class="bouton-faq">
            <button type="button" class="btn_btn-primary1">
                Envoyer &#10140;
            </button>
        </div>
    </section>
    <!-- section autre commentaire -->
    

  
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Commentaire</h1>
        </div>
        <div class="col-md-12 add-comment">
            <form action="<?php echo ROOT_URL . '/api/comments/create.php' ?>" method="post">
                <label for="pseudoMemb">Pseudo :</label>
                <input type="text" name="pseudoMemb" id="pseudoMemb" required>
                <br>

                <label for="article">Sélectionner l'article :</label>
                <select name="article" id="article" required>
                    <option value="1">Article Evenement</option>
                    <option value="2">Article Portrait</option>
                </select>
                <br>

                <label for="comment">Commentaire :</label>
                <textarea name="comment" id="libCom" maxlength="500" style="height: 200px" required></textarea>
                <br>

                <button type="submit" class="btn btn-primary button-comment">Poster mon commentaire </button>
            </form>

            
        </div>
</div>    
</div>


    <section class="other-comment">
        <h3>Autre commentaire :</h3>
        <div class="container-comment">
            <div class="comment">
                <span class="text-comment">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa facilis ut earum cum distinctio magni? Placeat eos dignissimos unde illo, tenetur iure praesentium necessitatibus nostrum ratione error ad voluptatum deserunt.
                    <!-- commentaire qui sera ajouté en fonction de ce que l'utilisateur écrit -->
                </span>
                <div class="button-comment">
                    <button type="button" class="btn_btn-primary2">
                        Répondre &#10140;
                    </button>
                    <button type="button" class="bouton-like">
                        <img src="../../../src/images/like.svg"> Like &#10140;
                    </button>
                </div>
            </div>
            <div class="comment">
                <span class="text-comment">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ipsa odit facilis sit dolores temporibus molestiae ipsam quidem. Pariatur commodi facilis omnis harum itaque dolorum et eius tenetur quibusdam aspernatur!
                    <!-- commentaire qui sera ajouté en fonction de ce que l'utilisateur écrit -->
                </span>
                <!-- bouton dans la partie du commentaire -->
                <div class="button-comment">
                    <button type="button" class="btn_btn-primary2">
                        Répondre &#10140;
                    </button>
                    <button type="button" class="bouton-like">
                        <img src="../../../src/images/like.svg"> Like &#10140;
                    </button>
                </div>
            </div>
        </div>
        <div class="bouton-faq">
            <button type="button" class="btn_btn-primary1">
                Voir plus &#10140;
            </button>
        </div>
    </section>
    <?php 
        require '../../../footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>
