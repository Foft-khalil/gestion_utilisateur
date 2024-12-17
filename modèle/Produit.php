<?php
require_once 'config/database.php';

class Product {
    public static function addProduit($nom, $description, $prix, $quantite, $id_categorie) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO produits (nom, description, prix, quantite, id_categorie) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$nom, $description, $prix, $quantite, $id_categorie]);
    }

    public static function getAllProduits() {
        global $pdo;
        $stmt = $pdo->query("SELECT p.*, c.libelle AS category_name FROM products p LEFT JOIN categories c ON p.id_categorie = c.id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
}
?>