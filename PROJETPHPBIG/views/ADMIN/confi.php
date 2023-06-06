<?php

// Informations d'identification
define('DB_SERVER', 'mysql-projetpoo1.alwaysdata.net');
define('DB_USERNAME', '316497_test');
define('DB_PASSWORD', 'papesidy2002');
define('DB_NAME', 'projetpoo1_sql');

// Connexion � la base de donn�es MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// V�rifier la connexion
if ($conn === false) {
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>

