
<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes</title>
</head>
<body>
    <h2 class="h2"><a href="Accueil.php">Accueil</a></h2>
<form action="AjoutRecettes.php" method="POST">
    nom de la recette
    <input type="text"> </input>
    <p></p>
    <input type="file" id="image" name="image">
    <p></p>

    difficulté
    <select id="choix1" name="choix1">
            
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

    <p></p>
    
    catégorie
    <select id="choix2" name="choix2">
            <option value="1">Entrée</option>
            <option value="2">Plat</option>
            <option value="3">Dessert</option>
        </select>
        <!-- <button type="submit">Valider</button> -->
    
    <p></p>
    ingredients <input type="text"></input>
    <p></p>
    <!-- <input type="time"> temps de preparation</input> -->

    <button type="submit" name= "Valider" value="Valider">Valider</button>
</form>
</body>
</html>


<?php

include ('connexion.php');


if (isset($_POST['Valider'])){
    
    $sql = "INSERT INTO recettes (id, nom, imagerecette, difficulte, idcategorie) VALUES (?,? ,?, ?, ?)";

    if (mysqli_query($conn, $sql)) {
        echo "La recette a été ajoutée avec succès.";
    } else {
        echo "Erreur lors de l'ajout de la recette : " . $sql->error;
    }
}
?>