<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

// RECUP LES DONNEES
$idMemb = ctrlSaisies($_POST['idMemb']);
$prenomMemb = ctrlSaisies($_POST['prenomMemb']);
$nomMemb = ctrlSaisies($_POST['nomMemb']);
$passMemb = ctrlSaisies($_POST['passMemb']);
$passMemb2 = ctrlSaisies($_POST['passMemb2']);
$eMailMemb = ctrlSaisies($_POST['eMailMemb']);
$eMailMemb2 = ctrlSaisies($_POST['eMailMemb2']);
$numStat = ctrlSaisies($_POST['numStat']);
$dtMajMemb = date_create()->format('Y-m-d H:i:s'); // AJOUTE DATE MAJ

var_dump($_POST);

// VARIABLES POUR FONCTION UPDATE
$set_memb = "prenomMemb = '$prenomMemb', nomMemb = '$nomMemb', dtMajMemb = '$dtMajMemb', numStat = '$numStat' ";
$where_num = "numMemb = $idMemb";
$table_memb = "membre";

// PASSWORD 

if (isset($passMemb) && isset($passMemb)){ 
// MDP DOIT AVOIR UNE CERTAINE TAILE
if ($passMemb < 8 && $passMemb > 15) {
    echo 'Erreur, le mot de passe doit contenir entre 8 et 15 caratères.<br>';
    $passMemb = null; 
} 
//MDP DOIT CONTENIR MIN & MAJ
if (!preg_match('/[A-Z]/', $passMemb) && !preg_match('/[a-z]/', $passMemb)){ // checke maj & min
    echo 'Erreur, le mot de passe doit contenir au moins une majuscule et une minuscule.<br>';
    $passMemb = null;
}
//MDP DOIT AVOIR UN CHIFFRE
if (!preg_match('/[0-9]/', $passMemb)){
    echo 'Erreur, le mot de passe doit contenir au moins un chiffre.<br>';
    $passMemb = null;
}
// MDP DOIT Ê IDENTIQUE
if ($passMemb != $passMemb2){ 
    echo 'Les mots de passe doivent être identiques.<br>';
    $passMemb2 = null;
} 

$hash_password = password_hash($passMemb, PASSWORD_DEFAULT);
var_dump($hash_password);

$set_pass = "passMemb = '$hash_password', dtMajMemb = '$dtMajMemb'";

if (isset($passMemb) && isset($passMemb)){
    sql_update($table_memb, $set_pass, $where_num); 
} else {
    echo 'Veuillez remplir les deux champs mail.';
}
} 

// MAIL : VALIDE + IDENTIQUE
if (isset($eMailMemb) && isset($eMailMemb)){
if (filter_var($eMailMemb, FILTER_VALIDATE_EMAIL)) {
    echo("$eMailMemb est une adresse mail valide.<br>");
  } else {
    echo("$eMailMemb n'est pas une adresse mail valide.<br>");
  }

if ($eMailMemb != $eMailMemb2){
    echo 'Les adresses mail doivent être identiques.<br>';
    $eMailMemb2 = null;
} 

//UPDATE EMAIL
$set_mail = "eMailMemb = '$eMailMemb',  dtMajMemb = '$dtMajMemb'";

if (isset($eMailMemb) && isset($_eMailMemb2)){
    sql_update($table_memb, $set_mail, $where_num); 
}

} 

// UPDATE ! 

// UPDATE INFOS GENERALES
sql_update($table_memb, $set_memb, $where_num);

header('Location: ../../views/backend/members/list.php');

?>