<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$pseudoMemb= ctrlSaisies($_POST['pseudoMemb']); // ENTRE 6-70 CARACS

if ($pseudoMemb < 6 && $pseudoMemb > 70) {
    echo 'Erreur, le pseudo doit contenir entre 6 et 70 caractères.';
} else {
    echo 'Le pseudo est bon<br>';
}

$prenomMemb = ctrlSaisies($_POST['prenomMemb']);

$nomMemb = ctrlSaisies($_POST['nomMemb']);

$passMemb = ctrlSaisies($_POST['passMemb']); // 8-15 CARACS + MAJ / MIN / CHIFFRE, ACCEPTE CARACS SPECIAUX

if ($passMemb < 8 && $passMemb > 15) {
    echo 'Erreur, le mot de passe doit contenir entre 8 et 15 caratères.<br>';
    $passMemb = null; 
} else {
    echo 'Le mot de passe est assez long<br>';
}

if (!preg_match('/[A-Z]/', $passMemb) && !preg_match('/[a-z]/', $passMemb)){ // checke maj & min
    echo 'Erreur, le mot de passe doit contenir au moins une majuscule et une minuscule.<br>';
    $passMemb = null;
} else {
    echo 'Le mot de passe a une majuscule et une minuscule<br>';
}

if (!preg_match('/[0-9]/', $passMemb)){
    echo 'Erreur, le mot de passe doit contenir au moins un chiffre.<br>';
    $passMemb = null;
} else {
    echo 'Le mot de passe a un chiffre<br>';
}

$passMemb2 = ctrlSaisies($_POST['passMemb2']); // DOIT ÊTRE IDENTIQUE A PASSWORD

if ($passMemb != $passMemb2){ 
    echo 'Les mots de passe doivent être identiques.<br>';
    $passMemb2 = null;
} else {
    echo 'Le mot de passe est bon<br>';
}

$eMailMemb = ctrlSaisies($_POST['eMailMemb']);
$eMailMemb2 = ctrlSaisies($_POST['eMailMemb2']); // DOIT Ê IDENTIQUE

if ($eMailMemb != $eMailMemb2){
    echo 'Les adresses mail doivent être identiques.<br>';
    $eMailMemb2 = null;
} else {
    echo 'Le mail est bon<br>';
}

$accordMemb = ctrlSaisies($_POST['accordMemb']);
$statutMemb = ctrlSaisies($_POST['statutMemb']);

$dtCreaMemb = date_create()->format('Y-m-d H:i:s');
echo $dtCreaMemb; // donne la date & heure d'inscription

$max = 'MAX('. 'numMemb' . ')';
$numMemb = sql_select('MEMBRE', $max);
var_dump($numMemb[0]);
echo '<br>';
$numMemb = implode("", $numMemb[0]);
echo $numMemb;
echo '<br>';
// GENERE NBR DE MEMBRE (PREND +GRANDE VALEUR ET Y AJOUTE 1)
++$numMemb;
$numMemb = substr($numMemb, 1, 1);
echo $numMemb;


if (isset($pseudoMemb, $prenomMemb, $nomMemb, $passMemb, $passMemb2, $eMailMemb, $eMailMemb2, $accordMemb, $statutMemb)){
    sql_insert('MEMBRE', 
    'prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, dtCreaMemb, accordMemb, numMemb', 
    "'$prenomMemb', '$nomMemb', '$pseudoMemb', '$passMemb', '$eMailMemb', '$dtCreaMemb', '$accordMemb', '$numMemb'");
    
    echo "Le membre $nomMemb, $prenomMemb a été créé.";
}


echo '<br>';

// header('Location: ../../views/backend/members/list.php');