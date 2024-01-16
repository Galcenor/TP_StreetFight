<?php

class PersonnageModel {
    private $db;

    public function __construct() {

        $this->db = new PDO('mysql:host=localhost;dbname=streetfight', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getAllCharacters() {
        try {
            $query = $this->db->prepare('SELECT * FROM personnages');
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "Erreur SQL: " . $e->getMessage();
            return array();
        }
    }
    

    public function createCharacter($name, $atk, $life, $color) {
        $query = $this->db->prepare('INSERT INTO personnages (name, atk, life, color) VALUES (?, ?, ?, ?)');
        $query->execute([$name, $atk, $life, $color]);
    }
}

class ListController {
    public function index() {
        $personnageModel = new PersonnageModel();
        $characters = $personnageModel->getAllCharacters();
    
        if (empty($characters)) {
            $this->showNoCharactersMessage();
        } else {
            $this->showCharacterList($characters);
        }
    }

    private function showCharacterList($characters) {
        include __DIR__ . '/../view/others/list.php';
    }

    private function showNoCharactersMessage() {
        echo "<h1>Veuillez créer un personnage.</h1>";
    }
}

class CreateController {
    public function index() {

        echo 'Le personnage à bien était créer !';
        header('Location: index.php');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Traitement du formulaire de création
            $name = $_POST['name'];
            $atk = $_POST['atk'];
            $life = $_POST['life'];
            $color = $_POST['color'];

            $personnageModel = new PersonnageModel();
            $personnageModel->createCharacter($name, $atk, $life, $color);
        }
    }
}
