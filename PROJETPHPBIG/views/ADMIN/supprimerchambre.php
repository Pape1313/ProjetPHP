<!DOCTYPE html>
<html>
<head>
    <title>Gestion Chambre</title>
    <link href="../../asset/style/supprimerchambre.css" rel="stylesheet">
</head>
<body>
    <a id="acceuil" href="pageadmin3.php">Accueil</a>
    <br><br>
    <fieldset>
        <legend>Supprimer chambre</legend>
    </fieldset><br><br>
    <form action="" method="post">
        <label>Numero Chambre:</label>
        <input type="number" name="numero_chambre" required><br><br>
        <label>Numero Batiment:</label>
        <input type="number" name="numero_batiment" required><br><br>
        <input type="submit" name="supprimer" value="Supprimer">
    </form>
</body>
</html>

