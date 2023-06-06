<?php

require('confi.php');

// Classe pour gérer la gestion des chambres et des étudiants
class GestionChambreEtudiant
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Méthode pour récupérer les informations d'un étudiant par son ID
    public function getEtudiantById($etudiantId)
    {
        $query = "SELECT * FROM etudiant WHERE id = $etudiantId";
        $result = mysqli_query($this->conn, $query);
        $etudiant = mysqli_fetch_assoc($result);
        return $etudiant;
    }

    // Méthode pour récupérer la liste des chambres disponibles
    public function getChambresDisponibles()
    {
        $query = "SELECT id FROM chambre";
        $result = mysqli_query($this->conn, $query);
        $chambres = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $chambres;
    }

    // Méthode pour attribuer une chambre à un étudiant
    public function attribuerChambre($etudiantId, $chambreId)
    {
        $query = "UPDATE etudiant SET chambre = $chambreId WHERE id = $etudiantId";
        $result = mysqli_query($this->conn, $query);

        if ($result) {
            echo "<script type='text/javascript'>
                alert('Chambre attribuée');
                window.location.href = 'attributionchambre.php';
                </script>";
        } else {
            echo "<script type='text/javascript'>
                alert('Erreur lors de l\'attribution de chambre');
                window.location.href = 'attributionchambre.php';
                </script>";
        }
    }
}

// Initialiser la session
session_start();

// Vérifier si l'utilisateur est connecté, sinon le rediriger vers la page de connexion
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}

// Créer une instance de la classe GestionChambreEtudiant
$gestionChambreEtudiant = new GestionChambreEtudiant($conn);

if (isset($_POST['valider'])) {
    $etudiantId = $_SESSION['attribuer'];
    $chambreId = $_POST['selectchambre'];
    $gestionChambreEtudiant->attribuerChambre($etudiantId, $chambreId);
}

// Récupérer les informations de l'étudiant par son ID
$etudiant = $gestionChambreEtudiant->getEtudiantById($_SESSION['attribuer']);

// Récupérer la liste des chambres disponibles
$chambresDisponibles = $gestionChambreEtudiant->getChambresDisponibles();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Gestion chambre</title>
    <link href="pageadmin3.css" rel="stylesheet">
</head>

<body>
    <a id="ret" href="attributionchambre.php">Retour</a>
    <center>
        <div id="Admin">Administrateur</div>
        <br><br>
        <div id="AMS">
            <h4>Sélectionner la chambre à attribuer à <?php echo $etudiant['prenom'] . ' ' . $etudiant['nom'] ?></h4>
            <br>
            <form action="" method="post">
                <select name="selectch

