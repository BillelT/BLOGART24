<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

var_dump($_POST);

// Assurez-vous que les données POST existent avant de les utiliser

     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['pseudoMemb'], $_POST['article'], $_POST['comment'])) {
                    $pseudoMemb = $_POST['pseudoMemb'];
                    $article = $_POST['article']; 
                    $comment = $_POST['comment'];

                    // Assurez-vous de traiter correctement le résultat de sql_select
                    $article = sql_select('ARTICLE', '*', "numArt = '$article'")[0];

                    // Vérifiez si l'utilisateur est connecté et s'il a les autorisations nécessaires
                    if (!empty($article) && (!isset($_SESSION['numStat']) || ($_SESSION['numStat'] == 3 || $_SESSION['numStat'] == 2 || $_SESSION['numStat'] == 1))) {
                        $dtCreaCom = date('Y-m-d H:i:s');

                        // Échappez les valeurs pour éviter les injections SQL
                        $pseudoMemb = sql_escape($pseudoMemb);
                        $comment = sql_escape($comment);

                        // Assurez-vous d'avoir la colonne libCom dans la table COMMENT
                        $insert_comment = sql_insert(
                            'COMMENT',
                            'dtCreaCom, pseudoMemb, libCom, numArt',
                            "'$dtCreaCom', '$pseudoMemb', '$comment', '$article'"
                        );

                        if ($insert_comment) {
                            echo "Commentaire ajouté avec succès!";
                        } else {
                            echo "Erreur lors de l'ajout du commentaire.";
                        }
                    } else {
                        echo "Tous les champs doivent être complétés ou vous n'avez pas les autorisations nécessaires.";
                    }
                }
            }
            ?>