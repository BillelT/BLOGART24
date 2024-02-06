<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numMotCle = ctrlSaisies($_POST['numMotCle']);
$libMotCle = ctrlSaisies($_POST['libMotCle']);

$set_lib = "libMotCle = '$libMotCle'";
$where_num = "numMotCle = $numMotCle";
$motcle_lib = "motcle";

sql_update($motcle_lib, $set_lib, $where_num);

header('Location: ../../views/backend/keywords/list.php');

?>