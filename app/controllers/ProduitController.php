<?php
include "../models/produit.php";

class ProduitController {
    private $produit;

    public function __construct() {
        $this->produit = new Produit();
    }

    public function index() {
        $produits = $this->produit->produits();
        include "../views/produit.php";
    }

    public function cree() {
        include "../views/cree.php";
    }

    public function ajouter($nom, $prix) {
        $this->produit->cree($nom, $prix);
        header("Location: produit.php");
        exit();
    }
}

$p = new ProduitController();
$p->index();
?>
