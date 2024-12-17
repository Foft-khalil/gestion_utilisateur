<?php
require_once '../models/Category.php';

class CategoryController {
    public function addCategory() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $libelle = $_POST['libelle'];
            Category::addCategory($libelle);
            header('Location: ../views/categories.php');
        }
    }

    public function listCategories() {
        $categories = Category::getAllCategories();
        include '../views/categories.php';
    }

    
}
?>