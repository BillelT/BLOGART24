

Projet MMI 2024

## Fonctionnalités

=> ici la liste des features implémentées et valides

header : 

> un header avec logo qui ramène à la page d'accueil, un espace 'article' dans la nav qui ramène à un id de la page index.php, un bouton s'inscrire ou se connecter quand on n'est pas connecté (le bouton 's'inscrire' devient 'admin' quand on se connecte en tant qu'admin, et lorsqu'onse connecte on a un message "Bonjour pseudo" )
> un fil d'arianne 

footer : 
> tous les liens du footer fonctionnent sauf "témoignage" et "bordeaux france"
> adresse mail ouvre une page email
> téléphone ouvre téléphone 

accueil : 
> bouton vers la FAQ 
> deux articles (en dur), avec un bouton qui dirige vers les pages articles
> deux autres extraits d'articles (un qui redirige vers un article, l'autre nul part)
> "a propos" : chacune de nos images amènent vers un réseau social ou un site internet propre à chaque membre

Les pages articles : 
> un lien "lire plus" qui descend en bas de la page
> l'article et ses éléments intégrés via la bdd, des liens hypertextes grâce au BBCode
> les mots clés s'affichent bien selon l'article
> les sources sont des liens 
> bon lien vers la page interview
> on peut remplir son commentaire et son pseudo dans les commentaires MAIS ne s'envoie pas (bug)

La FAQ : 
> tout est en dur dans la FAQ (sauf lien vers autres articles et vers rgpd dans le texte warning sous le formulaire)

LM/CGU/RGP : 
> rédigé en dur mais complet

Page inscription :
> fonctionnel sur en local, s'enregistre bien dans la bdd mais quelques bugs en ligne notamment dans la connexion en admin
> mot de passe sous conditions ( (Entre 8 et 15 car., au - une majuscule, une minuscule, un chiffre, car. spéciaux acceptés))
> boutons securité et données a cocher ou non
> se souvenir de moi est fonctionnel
> un bouton qui inscrit et un autre qui redirige vers connexion si on est deja inscrit

Page connexion : 
> quelques bugs en ligne mais fonctionnel en local
> quand on se connecte on nous dit bonjour pseudo et on reconnait notre numArt (1=admin, 2=modé, 3=membre)

Mon profil :
> se bouton se met à la place de connexion lorsqu'on est connecté

Dasboard : 
> accès en cliquant sur le bouton dashboard quand on est connecté en admin
> tous les cruds fonctionnent
> statut :create, edit et delete fonctionnent (avec message d'alerte au moment de delete)
> membre / article/thematique/motcle : edit, create et delete fonctionnent (avec message d'alerte)

=> ici la liste des features non implémentées

header : 
> dans le header la page témoignage ne va nul part, et la barre de recherche n'est pas fonctionnelle

footer :
> sur certaines pages comme les rgpd on observe des bugs d'affichage et de lien 

accueil : 
> "Les différentes associations et refuges bordelais" devait amener vers une carte avec des api vers les lieux et assoc'
> formulaire contactez nous est simplement du html/css
> sous le formulaire on consent ou non a laisser nos données être enregistrées avec un lien vers rgpd


FAQ : 
> formulaire innacessible

Mon profil :
> les données personnalisées ne s'affichent pas ( on a un affichage en dur)
> bug au niveau de la déconnexion, quitter la session ne s'applique pas
> supprimer et modifier ne sont pas fonctionnels

Dashboard : 
> comment et like non accessibles


## Panel Admin

Accessible depuis : (accessible que si je suis admin)
> en local : https://blogart24/views/backend/dashboard.php
> en ligne : https://mmig6.gwendaljudic.com/views/backend/dashboard.php 

## Panel front

Accessible depuis : 
> en local : https://blogart24/index.php
> en ligne : https://mmig6.gwendaljudic.com/index.php 

**Identifiant localhost**

> admin : 
> pseudo : Camille
> pass : Aa12345678

> modérateur :
> pseudo : Phil09
> pass : 12345678

> membre :
> pseudo : juju1989
> pass : 12345678

**Identifiant url serveur exterieur (si différent de localhost)**

> admin :
> pseudo : Administrateur
> pass : 12345678Admin

> modérateur :
> pseudo : Phil09
> pass : 12345678

> membre :
> pseudo : juju1989
> pass : 12345678

### Structure et règles de la Base de données

La base de données fournie :
=> la votre épurée et mise à jour
> https://mmig6.gwendaljudic.com/phpmyadmin/
> pseudo : grp6
> mdp : N2YyZGRmMDNhNGRjOTU5OTNiYTkxYWFj

### Pour les utilisteurs/admin
> ils ont un numArt = 1, c'est comme ça que la bdd les reconnait
> leur bouton inscription devient dashboard
> leur bouton connection devient mon profil
> lui seul à accès au dashboard

### Pour les utilisteurs/modérateurs

> ils ont un numArt =2, c'est comme ça que la bdd les reconnait
> comme les membres

### Pour les utilisteurs/membres

> ils ont un numArt = 3, c'est comme ça que la bdd les reconnait
> bouton inscription disparait
> bouton connexion devient mon profil (d'où ils peuvent se connecter normalement)

### Pour les articles

articles : 
> table des matières (on n'a pas pu l'ajouter car non ne devions rien ajouter à la bdd)
> les citations à droites sont aussi en dur pour la même raison

> formulaire ne rempli pas la bdd



### Pour les commentaires

> commentaire à moitié fini et AUTRES commentaires sont en dur
> la page commentaire est pour l'instant accessible quelque soit notre statut
> boutons like partager et commentaires ne fonctionnent pas

### Pour les likes
> pas fonctionnel, juste des boutons en dur de déco


### Pour les autres éléments petinents à nous préciser

> on a plus de bugs en ligne qu'en local
> pas de vérificateurs de cookies mais un bouton a cocher ("Je consens à ce que mes données fournies dans ce formulaire de contact soient collectées et utilisées conformément à laPolitique de Confidentialité de Bibble'S.")
> aucun formulaire fonctionnel
> un BB code intégré aux paragraphes mais on a des difficultés à l'utiliser

## Architecture
- **api** - Contains all php calls for example "create.php" for statuts, articles
- **classes** - Contains all classes for example "members.php"
- **config** - Contains all the configuration files specific to the operation of the application, for example "security.php"
- **functions** - Contains all the functions of your code for example "data.php", "create.php"
- **views** - Contain all front
- **src** - Contain all sources files or external libs

## Files to complete
- **.env** - Foreach user exemple in .env.example
- **config/security.php** - Check user cookie
- **index.php** - Must be the homepage
- **views** - All your pages
- 
