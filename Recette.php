<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><a href="Accueil.php">Accueil</a></h2>
</body>
</html>
<?php
include("connexion.php");
$requete= $connexion->query("SELECT * FROM recettes");
$recetes= $requete->fetchAll(PDO::FETCH_ASSOC);
for ($i=0; $i < count($recetes); $i++) { 
    $image=$recetes[$i]["imagerecette"];
    $nom=$recetes[$i]["nom"];
    $nombreetoilesJaune= str_repeat("★ ",$recetes[$i]["difficulté"]);
    $nombreetoilesGrise=str_repeat("☆ ",5-$recetes[$i]["difficulté"]);
    $EtoilesDifficulte= $nombreetoilesJaune. $nombreetoilesGrise;
    echo("<div class='Recette'>");
    echo("<h2>Recette n°".($i+1)." ".$nom."</h2>");
    echo("<br/><img src='".$image."' alt ='Image de ".$nom."'></br>");
    echo("<h3>Difficulté : ". $EtoilesDifficulte ."</h3>");
    echo("<a href='AfficherRecette.php?ID=".$recetes[$i]["id"]."'>Contenue de la recette.</a>");
    echo("</div>");
}

?>
