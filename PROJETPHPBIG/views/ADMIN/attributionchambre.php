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

    // Méthode pour récupérer les étudiants sans chambre
    public function getEtudiantsSansChambre()
    {
        $query = "SELECT * FROM etudiant WHERE Chambre = 0";
        $result = mysqli_query($this->conn, $query);
        $etudiants = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $etudiants;
    }

    // Méthode pour attribuer une chambre à un étudiant
    public function attribuerChambre($etudiantId)
    {
        // Code pour attribuer une chambre à l'étudiant en fonction de son ID
        // ...

        // Exemple de mise à jour de la colonne "Chambre" pour l'étudiant
        $query = "UPDATE etudiant SET Chambre = 1 WHERE id = $etudiantId";
        $result = mysqli_query($this->conn, $query);

        if ($result) {
            echo '<h3>Attribution de chambre réussie</h3>';
        } else {
            echo '<h3>Erreur lors de l\'attribution de chambre</h3>';
        }
    }
}

// Initialiser la session
session_start();

// Vérifier si l'utilisateur est connecté, sinon le rediriger vers la page de connexion
if (!isset($_SESSION["email"])) {
    header("Location: pageadmin2.php");
    exit();
}

// Créer une instance de la classe GestionChambreEtudiant
$gestionChambreEtudiant = new GestionChambreEtudiant($conn);

if (isset($_POST['attribuer'])) {
    $etudiantId = $_POST['attribuer'];
    $gestionChambreEtudiant->attribuerChambre($etudiantId);
}

// Récupérer la liste des étudiants sans chambre
$etudiantsSansChambre = $gestionChambreEtudiant->getEtudiantsSansChambre();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Gestion chambre</title>
    <link href="../../asset/style/pageadmin3.css" rel="stylesheet">
</head>

<body>
    <a id="ret" href="pageadmin3.php">Retour</a>
    <center>
        <div id="Admin"> Administrateur</div>
        <br><br>
        <div id="AMS">
            <h4>Etudiant sans chambre</h4>
            <table border="1px">
                <thead>
                    <td>Prenom et nom</td>
                    <td>Ajouter</td>
                </thead>
                <?php foreach ($etudiantsSansChambre as $etudiant) { ?>
                    <tr>
                        <td><?php echo $etudiant['prenom'] . ' ' . $etudiant['nom']; ?></td>
                        <td>
                            <form action="" method="post">
                                <button value="<?php echo $etudiant['id']; ?>" name="attribuer">Attribuer</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </center>
</body>

</html>
