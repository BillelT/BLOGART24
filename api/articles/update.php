<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$dtCreaArt = ctrlSaisies($_POST['dtCreaArt']);
$dtMajArt = date("dtMajArt");
$libTitrArt = ctrlSaisies($_POST['libTitrArt']);
$libChapoArt = ctrlSaisies($_POST['libChapoArt']);
$libAccrochArt = ctrlSaisies($_POST['libAccrochArt']);
$parag1Art = ctrlSaisies($_POST['parag1Art']);
$parag1Art = BBCode($parag1Art);
$libSsTitr1Art = ctrlSaisies($_POST['libSsTitr1Art']);
$parag2Art = ctrlSaisies($_POST['parag2Art']);
$parag2Art = BBCode($parag2Art);
$libSsTitr2Art = ctrlSaisies($_POST['libSsTitr2Art']);
$parag3Art = ctrlSaisies($_POST['parag3Art']);
$parag3Art = BBCode($parag3Art);
$libConclArt = ctrlSaisies($_POST['libConclArt']);
$urlPhotArt = ctrlSaisies($_POST['urlPhotArt']);
$numMotCle = $_POST['motCle'];
$numArt = ctrlSaisies($_POST['numArt']);
$numThem = ctrlSaisies($_POST['numThem']);
$libThem = sql_select('THEMATIQUE', 'libThem', "numThem = '$numThem'");

// VERIFIER FIELDS

$requiredFields = ['libTitrArt', 'dtCreaArt', 'libChapoArt', 'libAccrochArt', 'parag1Art', 'libSsTitr1Art', 'parag2Art', 'libSsTitr2Art', 'parag3Art', 'libConclArt'];

  foreach ($requiredFields as $field) {
   if (empty($_POST[$field])) {
   echo "Veuillez remplir tous les champs du formulaire.";
  exit();
     }
  }

// IMAGES TEST

$nom_image = time() . '_' . $urlPhotArt;
move_uploaded_file($urlPhotArt, 'src/uploads' . $nom_image);


// VARIABLES POUR FONCTION UPDATE
$set_art = "dtMajArt = '$dtMajArt',
libTitrArt = '$libTitrArt',
libChapoArt = '$libTitrArt', 
libAccrochArt = '$libAccrochArt',
parag1Art = '$parag1Art', 
libSsTitr1Art = '$libSsTitr1Art',
parag3Art = '$parag3Art',
libConclArt = '$libConclArt', 
urlPhotArt = '$nom_image', 
numThem = '$numThem'";
$where_num = "numArt = '$numArt'";
$table_art = "ARTICLE";

// UPDATE INFOS GENERALES
sql_delete('MOTCLEARTICLE', $where_num);
sql_update($table_art, $set_art, $where_num);

foreach ($numMotCle as $mot){
    sql_insert('MOTCLEARTICLE', 'numArt, numMotCle', "$numArt, $mot");
}

header('Location: ../../views/backend/articles/list.php');

?>