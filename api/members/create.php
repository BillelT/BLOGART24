<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

session_start();

// PSEUDO
$pseudoMemb= ctrlSaisies($_POST['pseudoMemb']); // ENTRE 6-70 CARACS

if ($pseudoMemb < 6 && $pseudoMemb > 70) {
    echo 'Erreur, le pseudo doit contenir entre 6 et 70 caractères.';
} else {
    echo 'Le pseudo est bon<br>';
}

$verif = sql_select('membre', 'pseudoMemb', "pseudoMemb = '$pseudoMemb'");

if ($verif != NULL){
    echo 'Veuillez choisir un pseudo disponible.';
    $pseudoMemb = null;
}

//PRENOM
$prenomMemb = ctrlSaisies($_POST['prenomMemb']);
//NOM
$nomMemb = ctrlSaisies($_POST['nomMemb']);
//PASSWORD
$passMemb = ctrlSaisies($_POST['passMemb']); // 8-15 CARACS + MAJ / MIN / CHIFFRE, ACCEPTE CARACS SPECIAUX

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

$passMemb2 = ctrlSaisies($_POST['passMemb2']); // DOIT ÊTRE IDENTIQUE A PASSWORD

if ($passMemb != $passMemb2){ 
    echo 'Les mots de passe doivent être identiques.<br>';
    $passMemb = null;
} 

$hash_password = password_hash($passMemb, PASSWORD_DEFAULT);
var_dump($hash_password);
echo '<br>';


//EMAIL
$eMailMemb = ctrlSaisies($_POST['eMailMemb']);
$eMailMemb2 = ctrlSaisies($_POST['eMailMemb2']); // DOIT Ê IDENTIQUE

if (filter_var($eMailMemb, FILTER_VALIDATE_EMAIL)) {
    echo("$eMailMemb est une adresse mail valide.<br>");
  } else {
    echo("$eMailMemb n'est pas une adresse mail valide.<br>");
  }

if ($eMailMemb != $eMailMemb2){
    echo 'Les adresses mail doivent être identiques.<br>';
    $eMailMemb = null;
} 

//ACCORD DONNEES
$accordMemb = ctrlSaisies($_POST['accordMemb']);

if ($accordMemb !== 'OUI') {
    echo 'Veuillez accepter de partager vos données.<br>';
} else {
    $accordMemb = TRUE;
}

//STATUT
$numStat = ctrlSaisies($_POST['numStat']);
var_dump($numStat);
echo '<br>';

var_dump($role);
echo '<br>';

//DATE CREATION
$dtCreaMemb = date_create()->format('Y-m-d H:i:s');
echo $dtCreaMemb . '<br>'; // donne la date & heure d'inscription
$dtMajMemb = NULL;

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
echo $numMemb . '<br>';

//PARTIE PHP GOOGLE CAPTCHA

/* if(isset($_POST['g-recaptcha-response'])){
    $token = $_POST['g-recaptcha-response'];
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
    'secret' => '[6LcsWWkpAAAAAHnMUZ7lc2m15AYDMHjyNFGgiY4t]',
    'response' => $token
    );
    $options = array(
    'http' => array (
    
    'header' => "Content-Type: application/x-www-form-
    urlencoded\r\n",
    
    'method' => 'POST',
    'content' => http_build_query($data)
    )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result);
    /*
    - google response score is between 0.0 to 1.0
    - if score is 0.5, it's a human
    - if score is 0.0, it's a bot
    - google recommend to use score 0.5 for verify human
    *//*
    if ($response->success && $response->score >= 0.5) {
    //Le test est réussi, on peut inscrire la personne si le pseudo et
    var_dump(array('success' => true, "msg"=>"You are not a robot!",
    
    "response"=>$response));
    
    }else{
    /*
    * if score is less than 0.5, you can do following things
    * login => With low scores, require 2-factor-authentication or
    email
    verification to prevent credential stuffing attacks.
    
    * social => With low scores, require additional verification
    steps, such as a
    CAPTCHA or email verification.
    
    * - Limit unanswered friend requests from abusive users and send
    risky
    comments to moderation.
    
    * e-commerce => Put your real sales ahead of bots and identify risky
    
    transactions.
    
    * */
    /* var_dump(array('success' => false, "msg"=>"You are a robot!",
    
    "response"=>$response));
    
    }
    }

*/ 
// FIN PARTIE CAPTCHA
var_dump($pseudoMemb, $prenomMemb, $nomMemb, $passMemb, $eMailMemb, $accordMemb, $numStat);

if (isset($pseudoMemb, $prenomMemb, $nomMemb, $passMemb, $eMailMemb, $accordMemb, $numStat)){
    if (!isset($_SESSION['numStat'])) {
        if ($_SESSION['numStat'] == 1){
            //Vous pouvez le faire
            sql_insert('MEMBRE', 
            'prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, dtCreaMemb, accordMemb, numMemb, dtMajMemb, numStat', 
            "'$prenomMemb', '$nomMemb', '$pseudoMemb', '$hash_password', '$eMailMemb', '$dtCreaMemb', '$accordMemb', '$numMemb', '$dtMajMemb', '$numStat'");
            
        }
    } 
   
 

    header('Location: ../../views/backend/members/list.php');

} else {
    echo '<br><br><p style="color:red;">Veuillez remplir tout le formulaire.</p>';
}





?>
