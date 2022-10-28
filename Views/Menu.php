<!-- Nav tabs -->

<nav class="navbar navbar-dark bg-dark navbar-expand-lg rounded">
    <div class="container-fluid">
        <a class="navbar-brand <?php parDefaut() ?>" href="index.php">Accueil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <!--  Ajouter le code pour gérer le menu afin qu'il bascule à déconnexion quand la personne est connecté et vice versa   -->
                <a class="nav-link <?php navClass("connexion");
                
                    if(isset($_SESSION['connexion']) && $_SESSION['connexion'] = "false"){
                        echo "d-lg-none"; 
                    }
                ?>"
                    href="index.php?action=connexion">
                    Se connecter
                </a>
                <a class="nav-link <?php navClass("connexion");
                    if(!isset($_SESSION['connexion'])){
                        echo "d-lg-none"; 
                    }
                ?>"
                    href="index.php?action=seDeconnecter">
                    Se deconnecter
                </a>
            </div>
        </div>
    </div>
</nav>

<?php
function parDefaut()
{
    if (!isset($_GET["action"])) {
        echo "active";
    }
}

function navClass($menu)
{
    if (isset($_GET["action"])) {
        hightligtMenu($_GET["action"], $menu);
    }
}

function hightligtMenu($action, $choixMenu)
{
    if ($action == $choixMenu) {
        echo ' active ';
    } else {
        echo "";
    }
}
?>