<?php
// Démarrer votre session de façon sécuritaire
    if(session_status() == PHP_SESSION_NONE){
        session_start(); 
    }
function accueil()
{
    require 'views/Accueil.php';
}

function connexion()
{
    require 'views/Connexion.php';
}
function sport()
{
    require 'views/Sport.php';
    // affiche la page des sport disponible
}

function seDeconnecter()
{-
    session_unset(); 
    require 'views/Accueil.php';
    // Faites votre déconnexion, puis rediriger vers l'accueil
}

function seConnecter()
{
    if(empty($_POST['username']) && empty($_POST['password'])){
        // ou vers la page de connexion en cas d'échec.
        return header('Location: index.php?action=connexion');
    }
     // Essayer de connecter l'utilisateur,
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    if(session_status() == PHP_SESSION_NONE){
        session_start(); 
    }
    $_SESSION['infoUtilisateur'] = ["Username" => $username, "Password" => $password]; 
    // puis rediriger ver l'accueil en cas de réussite
    require "models/ManagerUtilisateur.php";
    
    $managerUtilisateur = new ManagerUtilisateur(); 
    $membresVerifier = $managerUtilisateur->verifieUtilisateur($_SESSION['infoUtilisateur']["Username"],$_SESSION['infoUtilisateur']["Password"]);

    
    if($membresVerifier == true){
            $_SESSION['connexion'] = "true";
            return header("location: index.php?action=accueil");
    }
    else{
        $_SESSION['connexion'] = "false";
        header("location: index.php?action=connexion");
    }
        
        
}
 
   
    
    
    
   
