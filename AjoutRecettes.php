<?php

require_once 'config.php';

// Récupérer les données du formulaire
$id = $_POST['id'];
$nom = $_POST['nom'];
$image= $_POST['imagerecette'];
$difficulte = $_POST['difficulte'];
$idcategorie = $_POST['idcategorie'];

// Préparer la requête SQL pour insérer une recette
$sql = "INSERT INTO recettes (id, nom, imagerecette, difficulte, idcategorie) VALUES (?,? ,?, ?, ?)";

// Préparer la déclaration SQL
$stmt = $conn->prepare($sql);

// Lier les paramètres
$stmt->bind_param("issi", $id, $nom, $image ,$difficulte, $idcategorie);

// Exécuter la requête
if ($stmt->execute()) {
    echo "La recette a été ajoutée avec succès.";
} else {
    echo "Erreur lors de l'ajout de la recette : " . $stmt->error;
}

// Fermer la déclaration et la connexion
$stmt->close();
$conn->close();

?>