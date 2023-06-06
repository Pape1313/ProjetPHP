<?php

require('confi.php');

// Classe pour gérer la gestion des étudiants
class GestionEtudiant
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Méthode pour ajouter un étudiant
    public function ajouterEtudiant($nom, $prenom, $email, $dateNaissance, $motDePasse)
    {
        $nom = $this->sanitizeInput($nom);
        $prenom = $this->sanitizeInput($prenom);
        $email = $this->sanitizeInput($email);
        $dateNaissance = $this->sanitizeInput($dateNaissance);
        $motDePasse = $this->sanitizeInput($motDePasse);

        $query = "INSERT INTO `etudiant` (nom, prenom, email, date_de_naissance, mot_de_passe)
                    VALUES ('$nom', '$prenom', '$email', '$dateNaissance', '" . hash('sha256', $motDePasse) . "')";

        $res = mysqli_query($this->conn, $query);

        if ($res) {
            echo '<h3> Ajout étudiant réussi </h3>';
            echo '<h3> Remplir le formulaire pour ajouter un autre étudiant </h3>';
        } else {
            echo '<h3> Erreur lors de l\'ajout de l\'étudiant </h3>';
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

// Créer une instance de la classe GestionEtudiant
$gestionEtudiant = new GestionEtudiant($conn);

if (isset($_POST['ajoutet'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $dateNaissance = $_POST['date_de_naissance'];
    $motDePasse = $_POST['mot_de_passe'];

    $gestionEtudiant->ajouterEtudiant($nom, $prenom, $email, $dateNaissance, $motDePasse);
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
            <legend>Ajout étudiant</legend>
        </fieldset><br><br>

        <label>Ident
