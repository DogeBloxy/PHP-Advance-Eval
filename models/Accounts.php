<?php 
require_once 'models/Database.php';

class Accounts extends Database {

    // Récupérer toutes les informations d'un compte en fonction de son ID depuis la base de données
    public function getUser() {
        $stmt = $this->db->query('SELECT * FROM `users` WHERE `id` = 1');
        return $stmt->fetchAll();
    }
}


?>