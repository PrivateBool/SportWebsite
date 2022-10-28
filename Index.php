<?php
// ----------------------------------------------------------------
// Fait par : hugo abric et mathieu colin
//
//
// ----------------------------------------------------------------
require 'Controller/controller.php';

try {
    if (!isset($_GET['action'])) {
        return accueil();
    }
    switch ($_GET['action']) {
        case 'connexion':
            connexion();
            break;
        case 'accueil':
            accueil();
            break;
        case 'sport':
            sport();
            break;
        case 'seConnecter':
            seConnecter();
            break;
        case "seDeconnecter":
            seDeconnecter();
            break;
        default:
            throw new Exception('Aucune page spécifique demandée');
    }
} catch (PDOException $e) {
    $msgErreur = $e->getMessage();
    require 'views/Erreur.php';
} catch (Exception $ex) {
    $msgErreur = $ex->getMessage();
    require 'views/Erreur.php';
}