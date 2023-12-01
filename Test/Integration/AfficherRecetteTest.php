<?php 

require_once("AfficherRecette.php");
use PHPUnit\Framework\TestCase;

class AfficherRecetteTest extends TestCase{
    public function testgetContenue(){
        $Contenue= new Recette(2);
        $this->assertEquals("Recette du mug cake",$Contenue->getcontenue());
    }

    public function testgetNom(){
        $Contenue= new Recette(2);
        $this->assertEquals("Mug cake chocolats",$Contenue->getnom());
    }
}


?>