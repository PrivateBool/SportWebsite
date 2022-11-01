<?php $titre = 'Sport';?>

<?php ob_start();?>


<?php
    $messageErreur =  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    Vous devez vous connecter afin d'accéder à cette page.
    <button type='button' class='btn-close' data-bs-dismiss='alert'
        aria-label='Close'></button>
    </div>";
    if(isset($_SESSION['connexion']) && $_SESSION['connexion'] == "ok"){
       echo '<h3>Bonjour sur la section inscription   
        '.$_SESSION['infoUtilisateur']["username"].'
       </h3>';
    }
    else{
        echo $messageErreur;
    }
?>

<section id="sportSection">
    <div> <!-- affiche à gauche de la page comme un menu des catégorie de sport-->

    </div>
</section>

<script src="js/Validation.js"></script>

<?php $contenu = ob_get_clean();?>

<?php require 'Template.php';?>
