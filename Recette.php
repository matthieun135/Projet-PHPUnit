<?php
include("connexion.php");

$requete= $connexion->query("SELECT * FROM recettes");
$recetes= $requete->fetchAll(PDO::FETCH_ASSOC);
for ($i=0; $i < count($recetes); $i++) { 
    $image=$recetes[$i]["imagerecette"];
    $nom=$recetes[$i]["nom"];
    echo("<div class='Recette'>");
    echo("<h2>Recette n°".($i+1)." ".$nom."</h2>");
    echo("<br/><img src='".$image."' alt ='Image de ".$nom."'");
    echo("</div>");
}

?>