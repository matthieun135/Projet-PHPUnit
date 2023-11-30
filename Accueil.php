<?php
echo ("<link rel='stylesheet' href='Acceuil.css'>");
echo ("<h1 className = 'h1'>Bienvnue sur notre site</h1></br>");
$lien1= "window.location.href='Recette.php'";
echo("<button className = 'button' onclick=".$lien1.">Liste des recettes</button>");
$lien2= "window.location.href='AjoutRecettes.php'";
echo("<button className = 'button' onclick=".$lien2.">Ajout de recette</button></br>");

?>