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
$urlPhotArt = ctrlSaisies($_FILES['urlPhotArt']);
$numMotCle = $_POST['motCle'];
$numArt = ctrlSaisies($_POST['numArt']);


// VARIABLES POUR FONCTION UPDATE
$set_art = "dtMajArt = '$dtMajArt',
libTitrArt = '$libTitrArt',
libChapoArt = '$libTitrArt', 
libAccrochArt = '$libAccrochArt',
parag1Art = '$parag1Art', 
libSsTitr1Art = '$libSsTitr1Art',
parag3Art = '$parag3Art',
libConclArt = '$libConclArt', 
urlPhotArt = '$urlPhotArt', 
numThem = '$numThem'";
$where_num = "numArt = '$numArt'";
$table_art = "ARTICLE";

// VERIFIER FIELDS

$requiredFields = ['libTitrArt', 'dtCreaArt', 'libChapoArt', 'libAccrochArt', 'parag1Art', 'libSsTitr1Art', 'parag2Art', 'libSsTitr2Art', 'parag3Art', 'libConclArt'];

  foreach ($requiredFields as $field) {
   if (empty($_POST[$field])) {
   echo "Veuillez remplir tous les champs du formulaire.";
  exit();
     }
  }

// IMAGES TEST

if(isset($_FILES['urlPhotArt'])){
    var_dump($_FILES);
    $files = $_FILES['urlPhotArt'];
    $tmpName = $files['tmp_name'];
    $name = $files['name'];
    $size = $files['size'];
    $error = $files['error'];
    
    if(!$error == 0){ // IF THERES AN ERROR
        // VERIFY FILE SIZE
        if ($size > 10000000) {
        echo "Le fichier est trop volumineux.";
        exit();
        }

        // VERIFY IMG SIZE
        list($width, $height) = getimagesize($tmpName);
        if ($width > 5000 || $height > 5000) {
        echo "L'image est trop grande.";
        exit();
        }

    } else { // IF THERES NO ERROR
        $nom_image = time() . '_' . $urlPhotArt;
        move_uploaded_file($tmpName, 'src/uploads' . $nom_image);
    }
}

// UPDATE INFOS GENERALES
sql_update($table_art, $set_art, $where_num);
sql_delete('MOTCLEARTICLE', $where_num);

foreach ($numMotCle as $mot){
    sql_insert('MOTCLEARTICLE', 'numArt, numMotCle', "$lastArt, $mot");
}

header('Location: ../../views/backend/articles/list.php');

?>