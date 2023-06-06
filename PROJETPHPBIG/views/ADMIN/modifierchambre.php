<!DOCTYPE html>
<html>

<head>
    <title>Gestion Chambre</title>
    <link href="../../asset/style/modifierchambre.css" rel="stylesheet">
</head>

<body>
    <?php
    // Inclure le fichier de configuration de la base de données

    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $email = $_POST["e-mail"];
        $currentBuilding = $_POST["current_building"];
        $currentRoom = $_POST["current_room"];
        $newBuilding = $_POST["new_building"];
        $newRoom = $_POST["new_room"];

        // Vérifier si l'adresse e-mail existe dans la base de données
        $query = "SELECT * FROM etudiant WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            // Mettre à jour les informations de la chambre
            $updateQuery = "UPDATE chambre SET numero_batiment = $newBuilding, numero_chambre = $newRoom WHERE numero_batiment = $currentBuilding AND numero_chambre = $currentRoom";
            $updateResult = mysqli_query($conn, $updateQuery);

            if ($updateResult) {
                echo '<h3>Modification de la chambre réussie.</h3>';
            } else {
                echo '<h3>Échec de la modification de la chambre. Veuillez réessayer.</h3>';
            }
        } else {
            echo '<h3>Échec de la modification de la chambre. L\'adresse e-mail n\'existe pas.</h3>';
        }
    }
    ?>

    <a id="acceuil" href="pageadmin3.php">Accueil</a>

    <form method="POST">
        <fieldset>
            <legend>Modifier chambre</legend>
        </fieldset><br><br>

        <label>Identifiant (Adresse e-mail) :</label>
        <input type="email" name="e-mail" required><br><br>

        <b>Lieu actuel :</b><br>
        <label>Numero Batiment :</label>
        <input type="number" name="current_building" required><br><br>
        <label>Numero Chambre :</label>
        <input type="number" name="current_room" required><br><br>

        <b>Destination :</b><br>
        <label>Nouveau Numero Batiment :</label>
        <input type="number" name="new_building" required><br><br>
        <label>Nouveau Numero Chambre :</label>
        <input type="number" name="new_room" required><br><br>

        <input type="submit" value="Modifier">
    </form>
</body>

</html>