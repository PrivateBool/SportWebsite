<?php

require "Models/ManagerConnexion.php"; 


class ManagerUtilisateur extends Manager
{
    
    public function getAllUsers()
    {
        $sql = "SELECT *
				FROM tbl_membre
				ORDER BY username";
        // Exécution directe
        $membres = $this->getConnexion()->query($sql);
        return $membres;
    }

    public function verifieUtilisateur($username, $password){
      $sql = "SELECT *
      FROM tbl_membre
      WHERE username = :username
      order by username";
     
      $membres = $this::getConnexion()->prepare($sql);
      $membres->bindparam('username', $username, pdo::PARAM_STR);
      $membres->execute();
      $resulat = $membres->fetch();
        if(password_verify($password, $resulat[1])){
          return true; 
        }
        else{
          return false; 
        }
    }

    public function ajoutNouveauMembre(){

    }
    public function supprimeMembres(){
      
    }
    public function ajoutNouveauSport(){
      
    }

    public function SuppressionSport(){
      
    }

    public function ajoutNouvelleCategorie(){
      
    }

    public function suppressionCategorie(){
      
    }
   
}