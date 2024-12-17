<?php
require_once '../models/User.php';

class UserController {
    public function addUser () {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $mot_de_passe = $_POST['mot_de_passe'];
            User::addUser ($nom, $prenom, $email, $mot_de_passe);
            header('Location: ../views/users.php');
        }
    }

    public function listUsers() {
        $users = User::getAllUsers();
        include '../views/users.php';
    }

    
}
?>
