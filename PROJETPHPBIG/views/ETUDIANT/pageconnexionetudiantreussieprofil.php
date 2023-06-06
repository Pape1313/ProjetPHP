<?php

class SuccessfulStudentPage {
    public function displayPage() {
        // Initialiser la session
        session_start();

        // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
        if (!isset($_SESSION["email"])) {
            header("Location: login.php");
            exit();
        }
        ?>
        <html>
        <head>
            <link href="../../asset/style/pageconnexionetudiantreussi.css" rel="stylesheet">
        </head>
        <body>
        <div id="entetenoir">
            <div id="ndimg">
                <img src="../../asset/image/logoiam.jpg" width="300px" height="200">
            </div>
            <p id="bven">Bienvenue <?php echo $_SESSION['email']; ?>!</p>
            <div id="exi"><img src="../../asset/image/exit.png"></div>
            <a href="deconnexionetudiant.php" id="deco">Déconnexion</a>
            <div id="sleep"><img src="../../asset/image/sleep.png"></div>
            <a id="chambre" href="#">chambre</a>
            <div id="profil"><img src="../../asset/image/user.png"></div>
            <a id="lepro" href="pageconnexionetudiantreussieprofil.php">profil</a>
        </div>
        <div id="stimg">
        </div>
        <img src="../../asset/image/image1.jpg" width=100%>
        </body>
        </html>
        <?php
    }
}

// Exemple d'utilisation :

$successfulStudentPage = new SuccessfulStudentPage();
$successfulStudentPage->displayPage();
?>

