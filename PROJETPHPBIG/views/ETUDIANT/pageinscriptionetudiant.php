
<?php
require('confi.php');
$inscription=new StudentRegistrationPage;
$inscription->displayPage();

class StudentRegistrationPage
{
    

    public function handleRegistration()
    {
        require_once('confi.php');
        global $conn;

        if (isset($_REQUEST['nom'], $_REQUEST['prenom'], $_REQUEST['date_de_naissance'], $_REQUEST['mot_de_passe'])) {
            // récupérer les données du formulaire
            $nom = stripslashes($_REQUEST['nom']);
            $nom = mysqli_real_escape_string($conn, $nom);

            $prenom = stripslashes($_REQUEST['prenom']);
            $prenom = mysqli_real_escape_string($conn, $prenom);

            $email = stripslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($conn, $email);

            $date = stripslashes($_REQUEST['date_de_naissance']);
            $date = mysqli_real_escape_string($conn, $date);

            $mot_de_passe = stripslashes($_REQUEST['mot_de_passe']);
            $mot_de_passe = mysqli_real_escape_string($conn, $mot_de_passe);

            // Insérer les données dans la base de données
            $query = "INSERT INTO `etudiant` (nom, prenom, email, date_de_naissance, mot_de_passe)
                      VALUES ('$nom', '$prenom', '$email', '$date', '" . hash('sha256', $mot_de_passe) . "')";
            $res = mysqli_query($conn, $query);

            if ($res) {
                header('location: pageinscriptionreussie.php');
                exit();
            }
        }
    }

    public function displayPage()
    {
?>
        <html>

        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="utf-8">
            <title></title>
            <link href="../../asset/style/pageinscriptionetudiant.css" rel="stylesheet">
        </head>

        <body>
            <?php $this->handleRegistration(); ?>

            <div style="position:absolute;top:60px; width:1280px ;font-size: 25px ; ">
                <center>
                    <form action="" method="post">
                        <div>INSCRIPTION</div>
                        <br>
                        <label>Nom:</label>
                        <input type="text" name="nom" required autocomplete="off"><br><br>

                        <label>Prénom:</label>
                        <input type="text" name="prenom" required autocomplete="off"><br><br>

                        <label>adresse mail:</label>
                        <input type="email" name="email" required autocomplete="off"><br><br>

                        <label>Date de Naissance:</label>
                        <input type="date" name="date_de_naissance" required autocomplete="off"><br><br>

                        <label>Mot De Passe:</label>
                        <input type="password" name="mot_de_passe" required autocomplete="off"><br><br>

                        <button type="submit" name="submit" id="inscrire">S'inscrire</button>
                    </form>
                </center>
            </div>
            <div>
                <img src="../../asset/image/image1.jpg" width=100% height=600>
            </div>
        </body>

        </html <?php }
        } ?>