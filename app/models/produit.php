<?php
include '../../config/database.php';

class Produit {
    private $connexion;

    public function __construct() {
        $this->connexion = new Connexion();
    }

    public function produits() {
        $query = "SELECT * FROM produit";
        $stmt = $this->connexion->connexion()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function produitParId($id) {
        $query = "SELECT * FROM produit WHERE id = ?";
        $stmt = $this->connexion->connexion()->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function cree($nom, $prix) {
        $query = "INSERT INTO produit (nom, prix) VALUES (?, ?)";
        $stmt = $this->connexion->connexion()->prepare($query);
        return $stmt->execute([$nom, $prix]);
    }

    public function update($id, $nom, $prix) {
        $query = "UPDATE produit SET nom = ?, prix = ? WHERE id = ?";
        $stmt = $this->connexion->connexion()->prepare($query);
        return $stmt->execute([$nom, $prix, $id]);
    }

    public function supprimer($id) {
        $query = "DELETE FROM produit WHERE id = ?";
        $stmt = $this->connexion->connexion()->prepare($query);
        return $stmt->execute([$id]);
    }
}


// $produit = new Produit();

// $produit->produits();
// $produit->produitParId(1);
// $produit->cree('Mouse', 259);
// $produit->update(1, 'SSD 256', 548);
// $produit->supprimer(1);

