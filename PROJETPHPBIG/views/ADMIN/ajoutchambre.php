<?php

require('confi.php');

// Classe pour gérer la gestion de chambre
class GestionChambre
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Méthode pour ajouter une chambre
    public function ajouterChambre($nomChambre, $numeroChambre, $numeroBatiment, $dateExpiration)
    {
        $nomChambre = $this->sanitizeInput($nomChambre);
        $numeroChambre = $this->sanitizeInput($numeroChambre);
        $numeroBatiment = $this->sanitizeInput($numeroBatiment);
        $dateExpiration = $this->sanitizeInput($dateExpiration);

        $query = "INSERT INTO `chambre` (nom_chambre, numero_chambre, numero_batiment, date_expiration)
                    VALUES ('$nomChambre', '$numeroChambre', '$numeroBatiment', '$dateExpiration')";

        $res = mysqli_query($this->conn, $query);

        if ($res) {
            echo '<h3> Ajout chambre réussi </h3>';
            echo '<h3> Remplir le formulaire pour ajouter une autre chambre </h3>';
        } else {
            echo '<h3> Erreur lors de l\'ajout de la chambre </h3>';
        }
    }

    // Méthode pour nettoyer les entrées utilisateur
    private function sanitizeInput($input)
    {
        $input = stripslashes($input);
        $input = mysqli_real_escape_string($this->conn, $input);
        return $input;
    }
}

// Initialiser la session
session_start();

// Vérifier si l'utilisateur est connecté, sinon le rediriger vers la page de connexion
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}

// Créer une instance de la classe GestionChambre
$gestionChambre = new GestionChambre($conn);

if (isset($_POST['ajoutch'])) {
    $nomChambre = $_POST['nom_chambre'];
    $numeroChambre = $_POST['numero_chambre'];
    $numeroBatiment = $_POST['numero_batiment'];
    $dateExpiration = $_POST['date_expiration'];

    $gestionChambre->ajouterChambre($nomChambre, $numeroChambre, $numeroBatiment, $dateExpiration);
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Gestion Chambre</title>
    <link href="../../asset/style/ajoutchambre.css" rel="stylesheet">
</head>

<body>
    <div id="entetenoir">
        <div id="ndimg">
            <img src="../../asset/image/logoiam.jpg" width="300px" height="200">
        </div>
        <h1 id="messbv">Bienvenue <?php echo $_SESSION['email']; ?>!</h1>
        <p id="txt3">Administrateur</p>
        <a link href="pageconnexionadminreussie.php"><button id="retour">Retour</button></a>
    </div>

    <form action="" method="POST">
        <br> <br>
        <fieldset>
            <legend>Ajout de chambre d'étudiant</legend>
        </fieldset><br><br>

        <label>Nom de la chambre:</label>
        <input type="text" name="nom_chambre" required><br><br>
        <label

