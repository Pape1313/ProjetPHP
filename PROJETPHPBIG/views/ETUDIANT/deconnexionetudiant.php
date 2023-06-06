<?php

class SessionManager {
    public function __construct() {
        session_start();
    }

    public function destroySession() {
        session_destroy();
        header("Location: pageconnexionetudiant.php");
        exit();
    }
}

// Exemple d'utilisation :
$sessionManager = new SessionManager();
$sessionManager->destroySession();
?>