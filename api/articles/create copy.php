<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$contenuArt = ctrlSaisies($_POST['*']);

sql_insert('article', 'numArt'.'dtCreaArt'.'libTitrArt'.'libChapoArt'.'libAccrocheArt', "'$contenuArt'");

header('Location: ../../views/backend/articles/list.php');