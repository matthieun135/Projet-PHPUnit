
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
    <input type="text"> nom de la recette</input>
    <p></p>
    <input type="file" id="" name="">
    <p></p>

    difficulté
    <select id="choix" name="choix">
            <option value=""></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

    <p></p>
    
    catégorie
    <select id="choix" name="choix">
            <option value=""></option>
            <option value="entré">Entrée</option>
            <option value="plat">Plat</option>
            <option value="dessert">Dessert</option>
        </select>
        <!-- <button type="submit">Valider</button> -->
    </form>
    <p></p>
    <input type="text"> ingredients</input>
    <p></p>
    <!-- <input type="time"> temps de preparation</input> -->

    <button type="submit">Valider</button>
</body>
</html>


<?php

include ('connexion.php')



?>