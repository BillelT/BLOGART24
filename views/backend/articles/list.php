<?php
include '../../../header.php'; // contains the header and call to config.php

//Load all statuts


//seulement si tu es admi ou moderateur tu as accès à cette page
if (!isset($_SESSION['numStat']) || $_SESSION['numStat'] !== 1 && $_SESSION['numStat'] !== 2 ) {
    // Rediriger vers une page d'erreur ou une page d'accueil
    header('index.php');
    exit();
}

?>
<!-- Bootstrap default layout to display all statuts in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Articles</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>date</th>
                        <th>Titre</th>
                        <th>Chapeau</th>
                        <th>Accroche</th>
                        <th>Mot Cle</th> 
                        <th>Thématique</th> 
                        <th>Action</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($articles as $article){ 
                        $numArt = $article['numArt']; // QUEL ARTICLE NUM EST-IL QUESTION?
                        $listMot = sql_select('article
                        INNER JOIN motclearticle ON article.numArt = motclearticle.numArt
                        INNER JOIN motcle ON motclearticle.numMotCle = motcle.numMotCle', 'article.numArt, libMotCle', "article.numArt = '$numArt'");
                        ?> 
                        <tr>
                            <td><?php echo($article['numArt']); ?></td>
                            <td><?php echo($article['dtCreaArt']); ?></td>
                            <td><?php echo($article['libTitrArt']); ?></td>
                            <td><?php echo($article['libChapoArt']); ?></td>
                            <td><?php echo($article['libAccrochArt']); ?></td>
                            <td><?php 
                            foreach ($listMot as $mot){
                                echo($mot['libMotCle'] . ', ');
                            }
                            ?></td> 
                            <td><?php echo($article['libThem']); ?></td>
                            <td>
                                <a href="edit.php?numArt=<?php echo($article['numArt']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numArt=<?php echo($article['numArt']); ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>
</div>
<?php


include '../../../footer.php'; // contains the footer