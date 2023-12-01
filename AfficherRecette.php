<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recette</title>
    <link rel="stylesheet" href="AfficherRecette.css">
</head>
<body>
    <h1><a href="Recette.php">🔙</a></h1>
    <h1>Voici la recette de
<?php
class Recette{
    private $id;
    private $nom;
    private $contenue;

    public function __construct($id){
        $this->id= $id;
        include("connexion.php");
        $requete= $connexion->prepare("SELECT * FROM recettes WHERE id=?");
        $requete->execute([$id]);
        $recetes= $requete->fetch(PDO::FETCH_ASSOC);
        $this->nom= $recetes["nom"];
        $this->contenue = $recetes["contenue"];
    }

    public function getnom(){
        return $this->nom;
    }

    public function getcontenue(){
        return $this->contenue;
    }
}
include("connexion.php");
$id= $_GET["ID"];
$recetes = new Recette($id);
echo($recetes->getnom()." </h1>");
echo("<h3>".$recetes->getcontenue()."</h3>")
?>  
</body>
</html>
