<?php

class RegistrationSuccessPage {
    public function displayPage() {
        ?>
        <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="utf-8">
            <title></title>
            <link href="../../asset/style/inscriptionetudiant.css" rel="stylesheet">
        </head>
        <body>
        <h3>Vous êtes inscrits</h3>
        <p>Cliquer ici pour vous connecter <a href='pageconnexionetudiant.php'>connecter</a> </p>
        <div> <img src="../../asset/image/image1.jpg" width=100%  height=600 > 
        </div>
         </body>
        </html>
        <?php
    }
}

// Exemple d'utilisation :

$successPage = new RegistrationSuccessPage();
$successPage->displayPage();

