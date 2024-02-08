<?php
require_once '../../../header.php';


// if (!isset($_SESSION['numStat']) || $_SESSION['numStat'] == 1 && $_SESSION['numStat'] !== 2 && $_SESSION['numStat'] !== 2 ){
    //header('Location: ../../index.php');
   // exit();
//}




?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Commentaire</h1>
        </div>
        <div class="col-md-12">
                
        <form action="/api/comments/create.php" method="post">
            <label for="pseudoMemb">Pseudo :</label>
            <input type="text" name="pseudoMemb" required>

            <label for="password">Mot de passe :</label>
            <input type="password" name="password" required>

            <label for="article">Sélectionner l'article :</label>
            <select name="article" required>
                <option value="1">Article Evenement</option>
                <option value="2">Article Portrait</option>
            </select>

            <label for="comment">Commentaire :</label>
            <textarea name="comment" required></textarea>

            <input type="submit" value="Poster le commentaire">
        </form>


</div>
</div>    
</div>
        
?>
<?php
include '../../../footer.php';
?>