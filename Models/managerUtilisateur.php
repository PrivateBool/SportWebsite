<?php

require "models/Manager.php"; // On pourra utiliser la connexion

// Hérite de la classe Manager
class ManagerUtilisateur extends Manager
{
    // Retourne la liste des provinces triés par nom de province
    public function getAllUsers()
    {
        $sql = "SELECT *
				FROM tbl_membre
				ORDER BY username";
        // Exécution directe
        $membres = $this->getConnexion()->query($sql);
        return $membres;
    }

    public function verifie($username, $password){
      $sql = "SELECT *
      FROM tbl_membre
      WHERE username = :username
      order by username";
     
      $membres = $this::getConnexion()->prepare($sql);
      $membres->bindparam('username', $username, pdo::PARAM_STR);
      // $membres->bindparam('password', $password, pdo::PARAM_STR);
      $membres->execute();
      $resulat = $membres->fetch();
        if(password_verify($password, $resulat[1])){
          return true; 
        }
        else{
          return false; 
        }
    }

   
}