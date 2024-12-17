<?php
require_once '../models/Product.php';
require_once '../models/Category.php';

class ProductController {
    public function addProduct() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom = $_POST['nom'];
            $description = $_POST['description'];
            $prix = $_POST['prix'];
            $quantite = $_POST['quantite'];
            $id_categorie = $_POST['id_categorie'];
            Product::addProduct($nom, $description, $prix, $quantite, $id_categorie);
            header('Location: ../views/products.php');
        }
    }

    public function listProducts() {
        $products = Product::getAllProducts();
        $categories = Category::getAllCategories();
        include '../views/products.php';
    }

    
}
?>