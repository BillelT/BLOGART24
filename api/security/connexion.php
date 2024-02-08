<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

session_start();

$eMailMemb = ctrlSaisies($_POST['eMailMemb']);
$passMemb = ctrlSaisies($_POST['passMemb']);

$search = sql_select('membre', '*', "eMailMemb = '$eMailMemb'");

// TESTE SI LES CHAMPS SONT REMPLIS

if (empty($eMailMemb) || empty($passMemb)) {
    echo "<p style='color: red;'>Veuillez remplir tous les champs.</p>";  // CEY PAS REMPLI
} 

// TEST EMAIL
if (filter_var($eMailMemb, FILTER_VALIDATE_EMAIL)) {
    echo $eMailMemb . "est une adresse mail valide.<br>";
  } else {
    echo $eMailMemb . "n'est pas une adresse mail valide. Veuillez saisir un mail réel.<br>";
    $eMailMemb = null;
  }

// TEST MDP
if ($passMemb < 8 && $passMemb > 15) {
    echo 'Erreur, le mot de passe doit contenir entre 8 et 15 caratères.<br>';
    $passMemb = null; 
} 

if (!preg_match('/[A-Z]/', $passMemb) && !preg_match('/[a-z]/', $passMemb)){ // checke maj & min
    echo 'Erreur, le mot de passe doit contenir au moins une majuscule et une minuscule.<br>';
    $passMemb = null;
}

if (!preg_match('/[0-9]/', $passMemb)){
    echo 'Erreur, le mot de passe doit contenir au moins un chiffre.<br>';
    $passMemb = null;
}

// TEST EMAIL MATCHE LE MDP 

$search = sql_select('membre', '*', "eMailMemb = '$eMailMemb'")[0];

if (count($search) != 0){
    $passwordHash = $search['passMemb'];
    if ($passMemb == $passwordHash) {
    // if (password_verify($password, $passwordHash)) {
        $_SESSION['numStat']=$search['numStat'];
        echo 'Connexion réussie.';
    } else {
        echo 'Mot de passe incorrect.';
    }
}

header('Location: ../../views/frontend/connexion.php');

echo("Form login");

