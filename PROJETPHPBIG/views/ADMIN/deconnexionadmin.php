<?php

// Classe pour gérer la connexion à la base de données
class DatabaseConnection
{
    private $conn;

    public function __construct($server, $username, $password, $database)
    {
        $this->conn = mysqli_connect($server, $username, $password, $database);
        if ($this->conn === false) {
            die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}

// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'projetchambre.sql');

// Créer une instance de la classe DatabaseConnection pour établir la connexion à la base de données
$databaseConnection = new DatabaseConnection(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Récupérer la connexion à la base de données
$conn = $databaseConnection->getConnection();

session_start();

// Détruire la session
session_destroy();

// Redirection vers la page de connexion
header("Location: pageadmin2.php");

?>
