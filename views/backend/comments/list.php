<?php
include '../../../header.php'; // contains the header and call to config.php

if (!isset($_SESSION['numStat']) || $_SESSION['numStat'] !== 1 && $_SESSION['numStat'] !== 2 ) {
    // Rediriger vers une page d'erreur ou une page d'accueil
    header('Location: /index.php');
    exit();
}
?>
?>