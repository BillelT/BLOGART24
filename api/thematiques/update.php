<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numThem = ctrlSaisies($_POST['numThem']);
$libThem = ctrlSaisies($_POST['libThem']);

$set_lib = "libThem = '$libThem'";
$where_num = "numThem = $numThem";
$them_lib = "THEMATIQUE";

sql_update($them_lib, $set_lib, $where_num);

header('Location: ../../views/backend/thematiques/list.php');

?>

