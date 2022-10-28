<?php $titre = 'Accueil';?>

<?php ob_start();?>

<h3>Bienvenue sur ce site.....</h3>

<?php $contenu = ob_get_clean();?>

<?php require 'Template.php';?>