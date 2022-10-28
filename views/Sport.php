<?php $titre = 'Sport';?>

<?php ob_start();?>




<form action="index.php?action=seConnecter" enctype="multipart/form-data"
    class="my-2 needs-validation" method="POST" novalidate>
    <div class="row mb-3">
        <label for="username" class="col-sm-2 col-form-label">
            Nom d'utilisateur&nbsp;:
        </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="username"
                name="username" placeholder="Nom d'utilisateur" minlength="3"
                maxlength="64" required>
            <div class="invalid-feedback">
                Nom d'utilisateur est obligatoire et doit avoir entre 3 et 64
                caractères
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <label for="password" class="col-sm-2 col-form-label">
            Mot de passe&nbsp;:
        </label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="username"
                name="password" placeholder="Mot de passe" minlength="3"
                maxlength="64" required>
            <div class="invalid-feedback">
                Mot de passe est obligatoire et doit avoir entre 3 et 64
                caractères
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <button class="btn btn-primary" type="submit">
                Se connecter
            </button>
        </div>
    </div>
</form>

<script src="js/Validation.js"></script>

<?php $contenu = ob_get_clean();?>

<?php require 'Template.php';?>