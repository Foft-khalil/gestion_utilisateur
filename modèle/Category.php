<?php
require_once 'config/database.php';

class Category {
    public static function addCategory($libelle) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO categories (libelle) VALUES (?)");
        return $stmt->execute([$libelle]);
    }

    public static function getAllCategories() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM categories");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
}
?>