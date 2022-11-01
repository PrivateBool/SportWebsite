<?php

require "Models/ManagerConnexion.php"; // On pourra utiliser la connexion

// Hérite de la classe Manager
class ManagerUtilisateur extends Manager
{
    // Retourne la liste des provinces triés par nom de province
    public function getAllUsers()
    {
        $sql = "SELECT *
				FROM tbl_utilisateur
				ORDER BY nom";
        // Exécution directe
        $membres = $this->getConnexion()->query($sql);
        return $membres;
    }

    public function verifie($username, $password){
      $sql = "SELECT *
      FROM tbl_utilisateur
      WHERE nom = :nom
      order by nom";
     
      $membres = $this::getConnexion()->prepare($sql);
<<<<<<< Updated upstream
      $membres->bindparam('username', $username, pdo::PARAM_STR);
      // $membres->bindparam('password', $password, pdo::PARAM_STR);
=======
      $membres->bindparam('nom', $username, pdo::PARAM_STR);
>>>>>>> Stashed changes
      $membres->execute();
      $resulat = $membres->fetch();
        if(password_verify($password, $resulat[motDePasse])){
          return true; 
        }
        else{
          return false; 
        }
    }

   
}