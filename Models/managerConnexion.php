<?php

class Manager
{
    // protected, car on ne veut pas qu'il soit accessible directement,
    // seulement par ses filles en héritage
    protected function getConnexion()
    {
        $host = 'localhost'; // Nom de l'hôte
        $db = 'bd_membreEncryption'; // Le nom de votre bd
        $charset = 'utf8'; // gestion des caractères envoyés au serveur
        $user = 'root'; // le nom d'utilisateur
        $pass = ''; // le mot de passe

        // le \PDO c'est pour le namespace global
        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            \PDO::ATTR_EMULATE_PREPARES => false, // contre l'injection de 2ème niveau
        ];
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

        // https://www.php.net/manual/en/pdo.construct.php
        $connexion = new \PDO($dsn, $user, $pass, $options);
        return $connexion;
    }
}