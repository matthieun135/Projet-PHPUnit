<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes</title>
    <link rel="stylesheet" href="Recette.css">
</head>
<body>
    <h2 class="h2"><a href="Accueil.php">Accueil</a></h2>
    <form action="Recette.php" method="POST">
        <select id="choix" name="choix">
            <option value="Tout">Tout</option>
            <option value="entré">Entré</option>
            <option value="plat">Plat</option>
            <option value="dessert">Dessert</option>
        </select>
        <button type="submit">Valider</button>
    </form>
</body>
</html>
<?php
class Recettes{
    private $id;
    private $nom;
    private $image;
    private $Contenue;
    private $difficulte;
    private $idcategories;

    public function __construct($id,$nom,$image,$Contenue,$difficulte,$idcategories){
        $this->id = $id;
        $this->nom = $nom;
        $this->image = $image;
        $this->Contenue = $Contenue;
        $this->difficulte = $difficulte;
        $this->idcategories = $idcategories;
    }
}
if (isset($_POST['choix'])){
    $choix=$_POST["choix"];
    if ($choix=="Tout"){
        echo("<h3>Voici toute les recettes.</h3>");
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
    }
    else{
        include("connexion.php");
        echo("<h3>Voici tout les ".$choix.".</h3>");
        $requete= $connexion->prepare("SELECT id FROM categories WHERE nom=?");
        $requete->execute([$choix]);
        $id= $requete->fetch(PDO::FETCH_ASSOC);
        $requete= $connexion->prepare("SELECT * FROM recettes WHERE idCategories=?");
        $requete->execute([$id["id"]]);
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
    }
}
else{
    include("connexion.php");
    echo("<h3>Voici toute les recettes.</h3>");
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
}
?>