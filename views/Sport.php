<?php $titre = 'Sport';?>

<?php ob_start();?>

<section id="sportSection">
    <div> <!-- affiche à gauche de la page comme un menu des catégorie de sport-->

    </div>
</section>
<script src="js/Validation.js"></script>

<?php $contenu = ob_get_clean();?>

<?php require 'Template.php';?>