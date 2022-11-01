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

function seDeconnecter()
{
<<<<<<< Updated upstream
    
=======
>>>>>>> Stashed changes
    session_unset(); 
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
    
<<<<<<< Updated upstream
    $managerUtilisateur = new ManagerUtilisateur(); 
    $membresVerifier = $managerUtilisateur->verifie($_SESSION['infoUtilisateur']["Username"],$_SESSION['infoUtilisateur']["Password"]);
    
=======
>>>>>>> Stashed changes
    
    $managerUtilisateur = new ManagerUtilisateur(); 
    $membresVerifier = $managerUtilisateur->verifieUtilisateur($_SESSION['infoUtilisateur']["username"],$_SESSION['infoUtilisateur']["password"]);
  
    if($membresVerifier == true){
            $_SESSION['connexion'] = "ok";
            return header("location: index.php?action=accueil");
    }
    else{
        $_SESSION['connexion'] = "false";
<<<<<<< Updated upstream
        header("location: index.php?action=connexion");
    }
        
        
        
    }
 
   
    
    
    
   
=======
        unset($_SESSION['infoUtilisateur']);
        unset($_POST['username']);
        unset($_POST['password']);
        return header("location: index.php?action=connexion");
    }       
}
>>>>>>> Stashed changes
