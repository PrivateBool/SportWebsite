<?php $titre = 'Accueil';?>

<?php ob_start();?>

<h3>Bienvenue sur ce site  <?php if(isset($_SESSION['infoUtilisateur']["username"]) && !empty($_SESSION['infoUtilisateur']["username"]))
{echo $_SESSION['infoUtilisateur']["username"]; 
}?></h3>

<?php $contenu = ob_get_clean();?>

<?php require 'Template.php';?>