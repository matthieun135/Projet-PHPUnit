<!DOCTYPE html>
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
            <input type="text" name="nom"> </input>
            <p></p>
            Image :
            <input type="file" id="image" name="image">
            <p></p>
        
            difficulté
            <select id="choix1" name="difficulte">
                    
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
        
            <p></p>
            
            catégorie
            <select id="choix2" name="categorie">
                    <option value="1">Entrée</option>
                    <option value="2">Plat</option>
                    <option value="3">Dessert</option>
            </select>
            
            <p></p>
            ingredients <input type="text" name ="ingredient"></input>
            <p></p>
            Contenue <input type="text" name ="Contenue"></input>
            <p></p>
        
            <button type="submit" name= "Valider" value="Valider">Valider</button>
        </form>
    </body>
</html>


<?php

include ('connexion.php');

if (isset($_POST['Valider'])){
    $sql = "INSERT INTO recettes (nom, imagerecette, contenue,difficulté, idCategories) VALUES (?, ? ,?, ?, ?)";
    $requete = $connexion->prepare($sql);
    $requete->execute([$_POST["nom"],"./images/".$_POST["nom"], $_POST["Contenue"], $_POST["difficulte"],$_POST["categorie"]]);
}
?>