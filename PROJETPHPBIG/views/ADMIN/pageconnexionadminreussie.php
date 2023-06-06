<?php
// Initialiser la session
session_start();

// Vérifier si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../asset/style/pageadmin.css" />
</head>
<body>
    <div class="sucess">
        <div id="entetenoir">
            <div id="ndimg">
                <img src="../../asset/image/logoiam.jpg" width="300px" height="200">
            </div>
            <h1 id="messbv">Bienvenue <?php echo $_SESSION['email']; ?>!</h1>
            <p id="txt3">Administrateur</p>
            <a link href="pageadmin3.php"> <button id="retour"> Retour </button></a>
        </div>
        <div id="barre">
            <a>Ajouter administrateur</a>
        </div>
        <p>Ceci est votre espace administrateur.</p>
        <a href="deconnexionadmin.php" id="dec">Déconnexion</a>
        <img src="../../asset/image/image1.jpg" width=100%>
        <div id="backg">
            <a href="ajoutchambre.php" id="ajc">Ajouter une chambre</a>
            <a href="ajoutetudiant.php" id="aje">Ajouter un étudiant</a>
            <a href="ajoutadmin.php" id="aja">Ajouter un administrateur</a>
        </div>
    </div>
</body>
</html>

