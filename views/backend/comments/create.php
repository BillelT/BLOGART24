<?php
include '../../../header.php';

if (!isset($_SESSION['numStat']) || $_SESSION['numStat'] == 1 && $_SESSION['numStat'] !== 2 && $_SESSION['numStat'] !== 2 ){
    header('Location: ../../index.php');
    exit();
}

sql_select('article','*');

?>

<?php
if ($_POST['submit']){
    if(isset($_POST['pseudo'], $_POST['commentaire'])&& !empty($_POST['pseudo'])&& !empty($_POST['commentaire'])) {
        header('Location : /views/backend/comments/create.php');
    }else{
        $c_erreur = "Tous les champs doivent être complétés";
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création nouveau Article</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new comment -->
            <form action="<?php echo ROOT_URL . '/api/comments/create.php' ?>" method="post" id="form">
            <input type="text" name="pseudo" placeholder="Votre pseudo"/><br>
            <textarea name="commentaire" placeholder="Votre Commentaire..."></textarea>
            <br>
            <input type="submit" value="poster" name="submit"/>

        </form>
        <?php if(isset($c_erreur)){echo "$c_erreur";}