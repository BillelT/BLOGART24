<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';



var_dump($_POST);
// Assurez-vous que les données POST existent avant de les utiliser
if (isset($_POST['pseudoMemb'], $_POST['comment'])) {
    // Utilisez la fonction ctrlSaisies pour nettoyer les entrées utilisateur
    $pseudoMemb = ctrlSaisies($_POST['pseudoMemb']);
    $passMemb = ctrlSaisies($_POST['password']);
    $numArt = ctrlSaisies($_POST['article']);
    $libCom = ctrlSaisies($_POST['comment']);
    $dtCreaCom = date("Y-m-d H:i:s");

    // Sélectionnez un article (à des fins de démonstration)
    $article = sql_select('article', '*')[0];

    // Insérez dans la table comment en utilisant INNER JOIN avec membre sur pseudoMemb
    if (!isset($_SESSION['numStat']) || ($_SESSION['numStat'] !== 1 && $_SESSION['numStat'] !== 2)) {
        $insert_comment = sql_insert(
            'comment INNER JOIN membre ON comment.numMemb = membre.numMemb GROUP BY libCom',
            'dtCreaCom, pseudoMemb, libCom, numArt',
            [$dtCreaCom, $pseudoMemb, $libCom, $article['numArt']]
        );
    }


    if ($insert_comment) {
        echo "Commentaire ajouté avec succès!";
    } else {
        echo "Erreur lors de l'ajout du commentaire.";
    }
} else {
    echo "Tous les champs doivent être complétés.";
}
?>
