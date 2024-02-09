<?php
require '../../../header.php';
?>
<!doctype html>
<html lang="fr-FR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../src/css/faq.css">
    <link rel="icon" href="/src/images/logo bibble's header.png">
</head>

<body class="body">
    <!-- Première partie de la page en dessous du header avec le texte -->
    <div class="titre-header-faq">
        <h1 class="title-faq">FAQ</h1>
        <p>Comment savoir si mon animal peut être heureux à Bordeaux ?
            La réponse doit se trouver sur cette page. De la position des parcs canins
            à la législation française concernant les animaux maltraités, bientôt la vie animale
            dans la municipalité de Bordeaux n’aura plus de secrets pour vous.<br><br>
            Si jamais votre interrogation ne trouve pas de réponse, n'hésitez pas à utiliser
            le formulaire de contact, nous reviendrons vers vous dans les plus brefs délais. </p>
    </div>
    <!-- Deuxième partie, faq avec les textes déroulants -->
    <section class="reductible-menu">
        <!-- question 1 -->
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        &#9745;Comment me tenir au courant des nouveautés dans la ville de bordeaux ?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    Nous vous conseillons de vous abonner aux pages Facebook et Instagram de la ville de bordeaux et de suivre le site officiel de la ville également.  Vous pouvez aussi vous abonner à la newsletter pour avoir des informations directement par mail.  Pour plus d’infos il existe de nombreux blogs comme le notre qui renseignent sur l’actualité locale de la protection des animaux. 
                    </div>
                </div>
            </div>
            <!-- question 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        &#9745; Est-ce que je peux proposer du contenu ?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    Oui vous pouvez proposer du contenu via le formulaire de contact. 
                    </div>
                </div>
            </div>
            <!-- question 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        &#9745; Est-ce que vous avez des réseaux sociaux ?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    Non nous n’avons pas de réseaux sociaux. 
                    </div>
                </div>
            </div>
            <!-- question 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                        &#9745; Est-ce que les animaux de compagnie sont malheureux en ville ?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    Certains animaux peuvent s’adapter rapidement à vivre en ville. Cependant, il y a des animaux qui on besoin de plus d’espace. 
                    </div>
                </div>
            </div>
            <!-- question 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                        &#9745; Quelles infrastructures existent à bordeaux ?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    La ville de Bordeaux possède divers aménagements avec des espaces verts qui permettent aux animaux de se promener, jouer. (Parc Bordelais, Jardin Public, Bassins à flot). Il y a aussi des cani-parcs qui laissent les chiens courir en liberté. 
                    </div>
                </div>
            </div>
            <!-- question 6 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                        &#9745; Comment adopter à bordeaux à petits prix ?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    Nous vous recommandons de vous rendre dans un refuge ou une association de protection des animaux. Vous pouvez aussi vous rendre sur des applications et site web qui laisse l’opportunité d’adopter des animaux gratuitement. N’oubliez jamais que prendre un animal est un engagement long terme qui avec tout les coûts d’alimentation et soins peut revenir cher. 
                    </div>
                </div>
            </div>
            <!-- question 7 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                        &#9745; Ca change quoi, d’adopter via une association? d’adopter via un refuge? d’adopter via la
                        SPA ?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    Les organisations tel que les refuges et associations qui recueillent des animaux errants et abandonnés sont un bon moyen pour adopter. L’association de la SPA est reconnue nationalement pour la protection des animaux. De plus quand on adopte dans des animaux via ces organisations les animaux sont en général vaccinés, identifiés et stérilisés. 
                    </div>
                </div>
            </div>
            <!-- question 8 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseThree">
                        &#9745; Est-ce que mon chien/mon chat est autorisé partout à bordeaux ?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    Non, il y a des lieux qui n’autorisent pas les chiens dans certains endroits publiques si ils ne sont pas tenues en laisse. Par exemple ils sont interdit dans les marchés, les plages et les transports en commun. Les chats eux ont plus de liberté pour se promener mais il est recommandé de les surveiller. 
                    </div>
                </div>
            </div>
            <!-- question 9 -->
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseOne">
                            &#9745; Est-ce que bordeaux fait quelque chose contre la prolifération des animaux
                            errants/abandonnés ?
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        La ville de Bordeaux a en effet mis en place des mesures pour contrer la prolifération des animaux abandonnés et errants. Une fourrière municipale a été crée et la ville a signé une convention avec la SPA qui leur permet de capturer et stériliser les chats errants. 
                        </div>
                    </div>
                </div>
                <!-- question 10 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTwo">
                            &#9745; Quelle est la législation par rapport aux animaux en ville ?
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        C’est le code rural qui légiste les animaux en ville. Ce dernier stipule que les propriétaires des animaux sont responsable des dégâts causés et que les animaux doivent être tenus en laisse sur la voie publique. Enfin, il y a aussi des réglementations par ville. Par exemple, la ville de Bordeaux interdit les chiens dans certains lieux publics. 
                        </div>
                    </div>
                </div>
                <!-- question 11 -->
                <div class="accordion-item">            
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseThree">
                            &#9745; Je connais un animal maltraité. que faire ?
                        </button>
                    </h2>
                    <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Nous vous recommandons de contacter la police ou la SPA.
                        </div>
                    </div>
                </div>
                <!-- question 12 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseThree">
                            &#9745; Si on veut voir des animaux à bordeaux, où aller ? bar à chat, aquarium, zoo ?
                        </button>
                    </h2>
                    <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Vous pouvez vous rendre dans des bars à chat et parcs canins. 
                        </div>
                    </div>
                </div>
                <!-- question 13 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThree">
                            &#9745; Y’a-t-il beaucoup de vétérinaire à Bordeaux ? Où sont-ils ?
                        </button>
                    </h2>
                    <div id="collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        En effet il y a de nombreux vétérinaires disponibles à Bordeaux. Pour plus d’infos rendrez-vous sur le site internet de l’Ordre des vétérinaires. 
                        </div>
                    </div>
                </div>
                <!-- question 14 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseThree">
                            &#9745; Ai-je le droit d’avoir des animaux dans les transports en commun ?
                        </button>
                    </h2>
                    <div id="collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Les animaux ne sont pas autorisés. 
                        </div>
                    </div>
                </div>
                <!-- question 15 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseThree">
                            &#9745; Est-ce que je peux avoir des témoignages de propriétaires d’animaux à bordeaux ?
                        </button>
                    </h2>
                    <div id="collapseFifteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Oui nous pouvons vous mettre en relation avec des propriétaires d’animaux à Bordeaux. 
                        </div>
                    </div>
                </div>
                <!-- question 16 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseThree">
                            &#9745; Qui êtes vous derrière ce site ?
                        </button>
                    </h2>
                    <div id="collapseSixteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Nous sommes une équipe qui renseigne les utilisateurs de notre blog sur la protection des animaux. Notre objectif est de fournir des informations claires et complètes. 
                        </div>
                    </div>
                </div>
            </div>


            <h3 class="h3-reductible">Sinon, retrouvez la réponse à vos questions dans nos articles</h3>
    </section>
    <!-- Troisième section, la partie Article de la page  -->
    <section class="section-article">
        <h2 class="h2-article">Nos Articles</h2>
        <!-- Article 1 -->
        <div class="card-article">
            <div class="card1">
                <img src="/src/images/francis feytout.png" class="card-img-top" alt="tête de Francis">
                <!-- Partie texte du premier article -->
                <div class="card-body">
                    <h2 class="card-title">FRANCIS FEYTOUT : </h2>
                    <h3 class="card-under-title">COMMENT PRENDRE SOIN D’UN ANIMAL EN PLEINE VILLE ?</h3>
                    <p class="card-text">Découvrez le portrait de cet homme acteur de bons nombres d’actions et
                        prises de positions au sein de la ville de Bordeaux.
                        Allant des espaces verts pour votre chien, aux mesures prises en ville
                        vous pourrez adopter sereinement votre futur compagnon.</p>
                    <!-- Bouton du premier article -->
                    <a href="/views/frontend/articles/interview.php" class="btn_btn-primary">Lire la suite &#10140;</a>
                </div>
            </div>
            <!-- Article 2 -->
            <div class="card1">
                <img src="/src/images/croquettes.png" class="card-img-top" alt="La marche ">
                <!-- Partie texte du deuxième article -->
                <div class="card-body">
                    <h4 class="card-title">DES KM ET DES CROQUETTES : </h4>
                    <h5 class="card-under-title">MARCHER POUR AIDER LES REFUGES ANIMALIERS</h5>

                    <p class="card-text">La deuxième édition de la Marche aux Croquettes s’invite à Bordeaux dans un
                        contexte d’inflation. Découvrez comment participer afin d’aider à remplir
                        les gamelles de nos amis à quatre pattes actuellement en refuges animaliers.</p>
                    <!-- Bouton du deuxième article -->
                    <a href="/views/frontend/articles/evenement.php" class="btn_btn-primary">Lire la suite &#10140;</a>
                </div>
            </div>
        </div>
        <!-- insérer le boostrap et faire les boutons -->
    </section>
    <!-- Dernière partie, la section contact -->
    <section class="contact-faq">
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
                    <textarea id="msg" name="user_message" class="form-control2" placeholder=" Message..."></textarea>
                </li>
            </ul>
        </form>
        <!-- Politique d econfidentialité à accepter en cochant -->
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Je consens à ce que mes données fournies dans ce formulaire de contact soient collectées et
                utilisées conformément à la Politique de Confidentialité de Bibble’S.
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
    <?php
    require '../../../footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>