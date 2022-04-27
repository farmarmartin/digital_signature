CREATE DATABASE IF NOT EXISTS dsign DEFAULT CHARACTER SET utf8 ;

CREATE Table IF NOT EXISTS subjekt(
    idsubjekt INT NOT NULL AUTO_INCREMENT,
    surname VARCHAR(45) NOT NULL,
    firstname VARCHAR(45) NOT NULL,
    PRIMARY KEY (idsubjekt)
);

CREATE TABLE IF NOT EXISTS certif (
    idcertificate VARCHAR (100) NOT NULL PRIMARY KEY,
    md5_key VARCHAR(100) NOT NULL,
    hash_value varchar(100) NOT NULL,
    expires DATE NOT NULL,
    subjekt_idsubjekt INT,
    FOREIGN KEY (subjekt_idsubjekt) REFERENCES subjekt(idsubjekt)
);