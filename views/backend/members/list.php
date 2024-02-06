<?php
include '../../../header.php'; // contains the header and call to config.php

//Load all keywords
$member = sql_select("membre INNER JOIN statut ON membre.numStat = statut.numStat", "*");
?>

<!-- Bootstrap default layout to display all statuts in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Membres</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>eMail</th>
                        <th>Accord RGPD</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($member as $mem){ ?>
                        <tr>
                            <td><?php echo($mem['numMemb']); ?></td>
                            <td><?php echo($mem['prenomMemb']); ?></td>
                            <td><?php echo($mem['nomMemb']); ?></td>
                            <td><?php echo($mem['eMailMemb']); ?></td>
                            <td><?php echo($mem['accordMemb']); ?></td>
                            <td><?php echo($mem['libStat']); ?></td>
                            <td>
                                <a href="edit.php?numMemb=<?php echo($mem['numMemb']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numMemb=<?php echo($mem['numMemb']); ?>" class="btn btn-danger">Delete</a>
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