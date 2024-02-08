<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numArt = ctrlSaisies($_POST['numArt']);

var_dump($numArt);

sql_delete('article', "numArt = $numArt");

header('Location: ../../views/backend/articles/list.php');