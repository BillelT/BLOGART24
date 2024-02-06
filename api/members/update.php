<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

// RECUP LES DONNEES
$numMemb = ctrlSaisies($_POST['numMemb']);
$prenomMemb = ctrlSaisies($_POST['prenomMemb']);
$nomMemb = ctrlSaisies($_POST['nomMemb']);
$passMemb = ctrlSaisies($_POST['passMemb']);
$passMemb2 = ctrlSaisies($_POST['passMemb2']);
$eMailMemb = ctrlSaisies($_POST['eMailMemb']);
$eMailMemb2 = ctrlSaisies($_POST['eMailMemb2']);
$statutMemb = ctrlSaisies($_POST['statutMemb']);

$set_memb = "
prenomMemb = '$prenomMemb', nomMemb = '$libMotCle";
$where_num = "numMotCle = $numMotCle";
$table_memb = "membre";

sql_update($motcle_lib, $set_lib, $where_num);

header('Location: ../../views/backend/keywords/list.php');

?>