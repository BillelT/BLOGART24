<?php
include '../../../header.php'; // contains the header and call to config.php


//seulement si tu es admi ou moderateur tu as accès à cette page
if (!isset($_SESSION['numStat']) || $_SESSION['numStat'] !== 3) {
    // Rediriger vers une page d'erreur ou une page d'accueil
    header('index.php');
    exit();
}else {
    //accès au bouton profil 
}

//Load all keywords
$MotCle = sql_select("motcle", "*");
?>

<!-- Bootstrap default layout to display all statuts in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Mots Clés</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>List des mots clés</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($MotCle as $mot){ ?>
                        <tr>
                            <td><?php echo($mot['numMotCle']); ?></td>
                            <td><?php echo($mot['libMotCle']); ?></td>
                            <td>
                                <a href="edit.php?numMotCle=<?php echo($mot['numMotCle']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numMotCle=<?php echo($mot['numMotCle']); ?>" class="btn btn-danger">Delete</a>
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