#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Apprenant
#------------------------------------------------------------

CREATE TABLE Apprenant(
        usr_ID        Int  Auto_increment  NOT NULL ,
        usr_nom       Varchar (50) NOT NULL ,
        usr_prenom    Varchar (50) NOT NULL ,
        usr_email     Varchar (50) NOT NULL ,
        usr_telephone Varchar (50) ,
        usr_passe     Varchar (50) NOT NULL
	,CONSTRAINT Apprenant_PK PRIMARY KEY (usr_ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Locaux
#------------------------------------------------------------

CREATE TABLE Locaux(
        locaux_ID      Int  Auto_increment  NOT NULL ,
        locaux_nom     Varchar (50) NOT NULL ,
        locaux_adresse Varchar (50) NOT NULL ,
        locaux_ville   Varchar (50) NOT NULL ,
        locaux_cp      Int NOT NULL
	,CONSTRAINT Locaux_PK PRIMARY KEY (locaux_ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Session
#------------------------------------------------------------

CREATE TABLE Session(
        session_ID         Int  Auto_increment  NOT NULL ,
        session_date       Date NOT NULL ,
        session_nb_inscrit Int NOT NULL ,
        session_statut     Bool NOT NULL ,
        locaux_ID          Int NOT NULL
	,CONSTRAINT Session_PK PRIMARY KEY (session_ID)

	,CONSTRAINT Session_Locaux_FK FOREIGN KEY (locaux_ID) REFERENCES Locaux(locaux_ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Gestionnaire
#------------------------------------------------------------

CREATE TABLE Gestionnaire(
        gest_ID    Int  Auto_increment  NOT NULL ,
        gest_email Varchar (50) NOT NULL ,
        gest_login Varchar (50) NOT NULL ,
        gest_passe Varchar (50) NOT NULL
	,CONSTRAINT Gestionnaire_PK PRIMARY KEY (gest_ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Formation
#------------------------------------------------------------

CREATE TABLE Formation(
        form_ID     Int  Auto_increment  NOT NULL ,
        form_nom    Varchar (50) NOT NULL ,
        form_cat    Varchar (50) NOT NULL ,
        form_desc   Longtext NOT NULL ,
        form_prix   Int NOT NULL ,
        form_niveau Varchar (20) NOT NULL ,
        form_statut Bool NOT NULL
	,CONSTRAINT Formation_PK PRIMARY KEY (form_ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Participer
#------------------------------------------------------------

CREATE TABLE Participer(
        session_ID Int NOT NULL ,
        usr_ID     Int NOT NULL
	,CONSTRAINT Participer_PK PRIMARY KEY (session_ID,usr_ID)

	,CONSTRAINT Participer_Session_FK FOREIGN KEY (session_ID) REFERENCES Session(session_ID)
	,CONSTRAINT Participer_Apprenant0_FK FOREIGN KEY (usr_ID) REFERENCES Apprenant(usr_ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Gerer
#------------------------------------------------------------

CREATE TABLE Gerer(
        form_ID Int NOT NULL ,
        gest_ID Int NOT NULL
	,CONSTRAINT Gerer_PK PRIMARY KEY (form_ID,gest_ID)

	,CONSTRAINT Gerer_Formation_FK FOREIGN KEY (form_ID) REFERENCES Formation(form_ID)
	,CONSTRAINT Gerer_Gestionnaire0_FK FOREIGN KEY (gest_ID) REFERENCES Gestionnaire(gest_ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Effectuer
#------------------------------------------------------------

CREATE TABLE Effectuer(
        form_ID    Int NOT NULL ,
        session_ID Int NOT NULL
	,CONSTRAINT Effectuer_PK PRIMARY KEY (form_ID,session_ID)

	,CONSTRAINT Effectuer_Formation_FK FOREIGN KEY (form_ID) REFERENCES Formation(form_ID)
	,CONSTRAINT Effectuer_Session0_FK FOREIGN KEY (session_ID) REFERENCES Session(session_ID)
)ENGINE=InnoDB;

