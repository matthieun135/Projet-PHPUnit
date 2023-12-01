<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AfficherRecette.css">
    <title>Recette</title>
</head>
<body>
    <h1><a href="Recette.php">🔙</a></h1>
    <h1 class = "h1">Voici la recette de
<?php
include("connexion.php");
$id= $_GET["ID"];
$requete= $connexion->prepare("SELECT * FROM recettes WHERE id=?");
$requete->execute([$id]);
$recetes= $requete->fetch(PDO::FETCH_ASSOC);
echo($recetes["nom"]." </h1>");
echo("<h3 class = 'h3'>".$recetes["contenue"]."</h3>")
?>  
</body>
</html>