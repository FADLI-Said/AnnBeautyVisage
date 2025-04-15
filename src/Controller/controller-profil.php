<?php

session_start();

include_once "../../config.php";

if (!isset($_SESSION['id'])) {
    header('Location: controller-connexion.php');
    exit;
}

include_once "../View/view-profil.php";

?>