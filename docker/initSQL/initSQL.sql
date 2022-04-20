CREATE TABLE Produits(
    idprod INTEGER AUTO_INCREMENT,
    reference VARCHAR(100) NOT NULL ,
    modele VARCHAR(100) NOT NULL ,
    categorie VARCHAR(100) NOT NULL ,
    prix FLOAT null default(0),
    description VARCHAR(100),
    echelle VARCHAR(100),
    fabriquant VARCHAR(100) NOT NULL ,
    PRIMARY KEY (idprod)
);

CREATE TABLE Utilisateur(
     iduser INTEGER AUTO_INCREMENT,
     nom VARCHAR(100) NOT NULL,
     prenom VARCHAR(100) NOT NULL,
     email VARCHAR(100) NOT NULL ,
     age INTEGER NOT NULL ,
     password VARCHAR(100) NOT NULL,
     PRIMARY KEY (iduser)
);

CREATE TABLE Annonces(
     idannonce INTEGER AUTO_INCREMENT,
     iduser INTEGER,
     titre VARCHAR(50) NOT NULL,
     description VARCHAR(100) NOT NULL,
     date_deb DATE NOT NULL,
     avendre BOOL NOT NULL,
     brochureFilename VARCHAR(255),
     PRIMARY KEY (idannonce),
     FOREIGN KEY (iduser) REFERENCES utilisateur(iduser)
);
