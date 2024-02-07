<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numMotCle = ctrlSaisies($_POST['numMotCle']);

$presentArt = sql_select('MOTCLE', '*', null, null, '1');

if ($presentArt != 0){
    echo '<br><p style="color:red">Ce mot-clé est encore utilisé dans un article. Veuillez le supprimer avant de procéder</p>.';

} else {
    sql_delete('MOTCLE', "numMotCle = $numMotCle");
    header('Location: ../../views/backend/keywords/list.php');
}





