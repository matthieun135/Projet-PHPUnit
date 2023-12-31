<?php
include("config.php");
try {
    $hote = $DB_hote;
    $utilisateur = $DB_utilisateur;
    $motDePasse = $DB_motDePasse;
    $nomDeLaBase = $DB_nomDeLaBase;
    
    // Création d'une instance de PDO pour la connexion à la BDD
    $connexion = new PDO("mysql:host=$hote;dbname=$nomDeLaBase", $utilisateur, $motDePasse);
    
    // Configuration de PDO pour générer des exceptions en cas d'erreur
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // En cas d'erreur de connexion, affiche un message d'erreur et arrête le script
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
    die();
}

?>