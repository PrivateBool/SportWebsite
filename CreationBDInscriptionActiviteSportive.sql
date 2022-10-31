#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS `BD_inscription_activite_sportive`;
CREATE DATABASE IF NOT EXISTS `BD_inscription_activite_sportive` default CHARACTER SET utf8 COLLATE utf8_general_ci; 
USE `BD_inscription_activite_sportive`;
#------------------------------------------------------------
# Table: tbl_utilisateur
#------------------------------------------------------------


CREATE TABLE BD_inscription_activite_sportive. tbl_utilisateur(
        id_utilisateur Int  Auto_increment  NOT NULL ,
        motDePasse     Varchar (255) NOT NULL ,
        nom            Varchar (50) NOT NULL
	,CONSTRAINT tbl_utilisateur_AK UNIQUE (nom)
	,CONSTRAINT tbl_utilisateur_PK PRIMARY KEY (id_utilisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tbl_Catégorie
#------------------------------------------------------------

CREATE TABLE BD_inscription_activite_sportive. tbl_Categorie(
        id_categorie Int  Auto_increment  NOT NULL ,
        nom          Varchar (50) NOT NULL
	,CONSTRAINT tbl_Categorie_AK UNIQUE (nom)
	,CONSTRAINT tbl_Categorie_PK PRIMARY KEY (id_categorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tbl_Activite_Sportive
#------------------------------------------------------------

CREATE TABLE BD_inscription_activite_sportive. tbl_Activite_Sportive(
        id_Activite_Sportive         Int  Auto_increment  NOT NULL ,
        lieu                         Varchar (50) NOT NULL ,
        nombre_de_places_dispinobles Int NOT NULL ,
        nom                          Varchar (50) NOT NULL ,
        id_categorie                 Int NOT NULL
	,CONSTRAINT tbl_Activite_Sportive_AK UNIQUE (nom)
	,CONSTRAINT tbl_Activite_Sportive_PK PRIMARY KEY (id_Activite_Sportive)

	,CONSTRAINT tbl_Activite_Sportive_tbl_Categorie_FK FOREIGN KEY (id_categorie) REFERENCES tbl_Categorie(id_categorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tbl_inscriptions
#------------------------------------------------------------

CREATE TABLE BD_inscription_activite_sportive. tbl_inscriptions(
        id_Activite_Sportive Int NOT NULL ,
        id_utilisateur       Int NOT NULL
	,CONSTRAINT tbl_inscriptions_PK PRIMARY KEY (id_Activite_Sportive,id_utilisateur)

	,CONSTRAINT tbl_inscriptions_tbl_Activite_Sportive_FK FOREIGN KEY (id_Activite_Sportive) REFERENCES tbl_Activite_Sportive(id_Activite_Sportive)
	,CONSTRAINT tbl_inscriptions_tbl_utilisateur0_FK FOREIGN KEY (id_utilisateur) REFERENCES tbl_utilisateur(id_utilisateur)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Ajout valeurs tbl_utilisateur
#------------------------------------------------------------
#------------------------------------------------------------
insert into BD_inscription_activite_sportive.tbl_utilisateur
(nom, motDePasse)
values
('Mathieu', '$2y$10$.0y6fg16N/jYgiIhPO6dyO3duukhWHmRMFqaQ6ZUQt4ob0Ab1S8SS'),/*123*/
('Hugo', '$2y$10$ls9ppDl8yITs.mwwsfb97eytMUULPFfO2aSf1EUH176M7aabBlt1m'),/*456*/
('Pierre', '$2y$10$nqOdzTExHVSH7rfIsoc7OOhvo89a26Em24GgEy63o5OeocLXIMwHK'),/*789*/
('Jean', '$2y$10$Cd8pZu/Rydz4Hlh/WTAaCOJga0yQG17yYExecDUvbUMDKzUf7UkpW'),/*111*/
('Jacques', '$2y$10$NvoKXOdHtY9MxzuwT2LgmeWvETKgp.NKUEbdL.7syxVQL7uqvz0jq');/*222*/

#------------------------------------------------------------
# Ajout valeurs tbl_categorie
#------------------------------------------------------------

insert into BD_inscription_activite_sportive.tbl_categorie
(nom)
values
('Individuelle'),
('En équipe'),
('Compétition'),
('Amicale'),
('Initiation');
#------------------------------------------------------------
# Ajout valeurs tbl_activite_sportive
#------------------------------------------------------------
insert into BD_inscription_activite_sportive.tbl_Activite_Sportive
(lieu, nombre_de_places_dispinobles, nom, id_categorie)
values
('Parc des Septs-Chutes',10, 'Tennis',1),
('Parc des Septs-Chutes',20, 'Volleyball',2),
('Parc des Septs-Chutes',10, 'Escalade',5),
('CEGEP Beauce-Appalaches',30, 'Hockey cosom',4),
('Parc des Septs-Chutes',10, 'Lancer du javelot',3);
#------------------------------------------------------------
# Ajout valeurs tbl_inscriptions
#------------------------------------------------------------

insert into BD_inscription_activite_sportive.tbl_inscriptions
(id_Activite_Sportive,id_utilisateur)
values
(1,1),
(2,2),
(3,3),
(4,4),
(5,5);