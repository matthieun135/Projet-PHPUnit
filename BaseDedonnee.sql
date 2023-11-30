CREATE DATABASE TpPHPUnit;
USE TpPHPUnit;

CREATE TABLE recettes (
    id INT(100) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    imagerecette VARCHAR(100) NOT NULL,
    difficulté INT NOT NULL,
);

CREATE TABLE Ingredients (
    id INT(100) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    idRecette INT(100) NOT NULL,     
    CONSTRAINT Ingredients_cle_idRecette FOREIGN KEY (idRecette) REFERENCES recettes (id),
);

CREATE TABLE categories (
    id INT(100) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    idRecette INT(100) NOT NULL,     
    CONSTRAINT Ingredients_cle_idRecette FOREIGN KEY (idRecette) REFERENCES recettes (id),
);