#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

CREATE schema BD_inscription_activite_sportive;
#------------------------------------------------------------
# Table: tbl_utilisateur
#------------------------------------------------------------


CREATE TABLE BD_inscription_activite_sportive. tbl_utilisateur(
        id_utilisateur Int  Auto_increment  NOT NULL ,
        motDePasse     Varchar (255) NOT NULL ,
        nom            Varchar (50) NOT NULL
	,CONSTRAINT tbl_utilisateur_AK UNIQUE (nom)
	,CONSTRAINT tbl_utilisateur_PK PRIMARY KEY (id_utilisateur)
);


#------------------------------------------------------------
# Table: tbl_Catégorie
#------------------------------------------------------------

CREATE TABLE BD_inscription_activite_sportive. tbl_Categorie(
        id_categorie Int  Auto_increment  NOT NULL ,
        nom          Varchar (50) NOT NULL
	,CONSTRAINT tbl_Categorie_AK UNIQUE (nom)
	,CONSTRAINT tbl_Categorie_PK PRIMARY KEY (id_categorie)
);


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
);


#------------------------------------------------------------
# Table: tbl_inscriptions
#------------------------------------------------------------

CREATE TABLE BD_inscription_activite_sportive. tbl_inscriptions(
        id_Activite_Sportive Int NOT NULL ,
        id_utilisateur       Int NOT NULL
	,CONSTRAINT tbl_inscriptions_PK PRIMARY KEY (id_Activite_Sportive,id_utilisateur)

	,CONSTRAINT tbl_inscriptions_tbl_Activite_Sportive_FK FOREIGN KEY (id_Activite_Sportive) REFERENCES tbl_Activite_Sportive(id_Activite_Sportive)
	,CONSTRAINT tbl_inscriptions_tbl_utilisateur0_FK FOREIGN KEY (id_utilisateur) REFERENCES tbl_utilisateur(id_utilisateur)
);

insert into BD_inscription_activite_sportive.tbl_utilisateur
(nom, motDePasse)
values
('Mathieu', '123')
