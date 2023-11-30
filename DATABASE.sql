CREATE DATABASE TpPHPUnit;
USE TpPHPUnit;

CREATE TABLE categories (
    id INT(100) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

CREATE TABLE recettes (
    id INT(100) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    imagerecette VARCHAR(100) NOT NULL,
    difficulté INT NOT NULL,
    idCategories INT(100) NOT NULL,
    CONSTRAINT recettes_cle_idCategories FOREIGN KEY (idCategories) REFERENCES categories (id)
);

CREATE TABLE Ingredients (
    id INT(100) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    idRecette INT(100) NOT NULL,     
    CONSTRAINT Ingredients_cle_idRecette FOREIGN KEY (idRecette) REFERENCES recettes (id)
);

INSERT INTO categories (nom) VALUES ("entré");
INSERT INTO categories (nom) VALUES ("plat");
INSERT INTO categories (nom) VALUES ("dessert");
