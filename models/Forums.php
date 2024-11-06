<?php 
require_once 'models/Database.php';

class Forums extends Database {

    // Récupérer tous les forums de la base de données
    public function getAllForums() {
        $stmt = $this->db->query('SELECT * FROM `blogs`');
        return $stmt->fetchAll();
    }

    // Récupérer les informations d'un forum en fonction de son ID depuis la base de données
    public function getOneForum() {
        $stmt = $this->db->query('SELECT * FROM `blogs` WHERE `id` = 1');
        return $stmt->fetchAll();
    }

    // Récupérer tous les messages publiés dans un forum spécifique en fonction de l'ID du forum cité depuis la base de données
    public function getAllMessages() {
        $stmt = $this->db->query('SELECT * FROM `messages` WHERE `id_blogs` = 1');
        return $stmt->fetchAll();
    }
}


?>