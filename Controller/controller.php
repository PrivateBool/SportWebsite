<?php
// Démarrer votre session de façon sécuritaire
    if(session_status() == PHP_SESSION_NONE){
        session_start(); 
    }
function accueil()
{
    require 'views/Accueil.php';
}

function sport(){
    require 'views/Sport.php';
}
function connexion()
{
    
    require 'views/Connexion.php';
}

function seDeconnecter()
{
    session_unset(); 
    session_destroy();
    require 'views/Accueil.php';
    // Faites votre déconnexion, puis rediriger vers l'accueil
}

function seConnecter()
{
    require "models/ManagerUtilisateur.php";

    if(empty($_POST['username']) && empty($_POST['password'])){
        // ou vers la page de connexion en cas d'échec.
        return header('Location: index.php?action=connexion');
    }
     // Essayer de connecter l'utilisateur,
    $username = $_POST['username']; 
    $password = $_POST['password']; 
   
    $_SESSION['infoUtilisateur'] = ["username" => $username, "password" => $password]; 
    // puis rediriger ver l'accueil en cas de réussite

    $managerUtilisateur = new ManagerUtilisateur(); 
    $membresVerifier = $managerUtilisateur->verifieUtilisateur($_SESSION['infoUtilisateur']["username"],$_SESSION['infoUtilisateur']["password"]);
  
    if($membresVerifier == true){
            $_SESSION['connexion'] = "ok";
            return header("location: index.php?action=accueil");
    }
    else{
        $_SESSION['connexion'] = "false";
        unset($_SESSION['infoUtilisateur']);
        unset($_POST['username']);
        unset($_POST['password']);
        return header("location: index.php?action=connexion");
    }       
}
