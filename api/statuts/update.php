<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numStat = ctrlSaisies($_POST['numStat']);
$libStat = ctrlSaisies($_POST['libStat']);

$set_lib = "libStat = '$libStat'";
$where_num = "numStat = $numStat";
$statut_lib = "STATUT";

sql_update($statut_lib, $set_lib, $where_num);

header('Location: ../../views/backend/statuts/list.php');

?>

