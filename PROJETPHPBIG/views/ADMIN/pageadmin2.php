<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link href="../../asset/style/pageadmin.css" rel="stylesheet">
</head>

<body>
    <?php
    require('confi.php');
    session_start();

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $password = $_POST['mot_de_passe'];

        // Préparer et exécuter la requête SQL en utilisant PDO
        $query = "SELECT * FROM administrateur WHERE email=? AND mot_de_passe=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $email, $password);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();


        if ($result) {
            $_SESSION['email'] = $email;

            header('Location: pageadmin3.php');
            exit();
        } else {
            echo "<script>alert('Vérifiez bien vos identifiants')</script>";
        }
    }
    ?>

    <div id="entetenoir">
        <div id="ndimg">
            <img src="../../asset/image/logoiam.jpg" width="300px" height="200">
        </div>
        <p id="txt3">Administrateur</p>
        <a href="../../index.php"> <button id="retour">Accueil</button></a>
    </div>

    <div id="stimg">
        <div id="formula"></div>
        <div>
            <form action="" method="post" id="formula">
                <div id="connect">
                    <p id="txt2">Connectez-vous</p>
                </div>
                <div>
                    <input type="email" id="mail" name="email" placeholder="azerty12@example.com">
                </div>
                <div>
                    <input type="password" id="mdp" name="mot_de_passe" placeholder="votre_mot_de_passe">
                </div>
                <div>
                    <button type="submit" id="seconnect" name="se connecter">Se connecter</button>
                </div>
            </form>
        </div>
        <img src="../../image/image1.jpg" width="100%">
    </div>
</body>

</html>