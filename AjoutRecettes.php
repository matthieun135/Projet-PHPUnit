
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

    <input type="text"> nom de la recette</input>
    <p></p>
    <input type="url"> lien de l'image</input>
    <p></p>
    <input type="text"> difficulté</input>
    <p></p>
    
    <form action="AjoutRecettes.php" method="post">catégorie
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

</body>
</html>


<?php





?>