<?php
include '../../../header.php'; // contains the header and call to config.php

//Load all statuts



$articles = sql_select('motcle
INNER JOIN motclearticle ON motclearticle.numMotCle = motcle.numMotCle
INNER JOIN article ON article.numArt = motclearticle.numArt
INNER JOIN thematique ON article.numThem = thematique.numThem
GROUP BY article.numArt',
'libMotCle, dtCreaArt, article.numArt, dtCreaArt, libTitrArt, libChapoArt, libAccrochArt, libThem'
);

$motcle = sql_select('motclearticle
INNER JOIN motcle ON motclearticle.numMotCle = motcle.numMotCle 
GROUP BY motclearticle.numMotCle WITH ROLLUP', 'numArt, libMotCle');
var_dump($motcle);
echo '<br><br><br>';

$listMotCle = $motcle['libMotCle'];
echo $listMotCle . '<br><br>';
$nuMotCle = $motcle['numArt'];



/*

foreach ($motcle as $num => $mot) {
    echo "$num: $mot <br>";
  }
*/
exit;


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
                    <?php foreach($articles as $article){ ?>
                        <tr>
                            <td><?php echo($article['numArt']); ?></td>
                            <td><?php echo($article['dtCreaArt']); ?></td>
                            <td><?php echo($article['libTitrArt']); ?></td>
                            <td><?php echo($article['libChapoArt']); ?></td>
                            <td><?php echo($article['libAccrochArt']); ?></td>
                            <td><?php echo ($article['libMotCle']); ?></td> 
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