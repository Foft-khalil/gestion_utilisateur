<?php
require_once 'config/database.php';

class User {
    public static function addUser ($nom, $prenom, $email, $mot_de_passe) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO users (nom, prenom, email, mot_de_passe) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$nom, $prenom, $email, password_hash($mot_de_passe, PASSWORD_DEFAULT)]);
    }

    public static function getAllUsers() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
}
?>