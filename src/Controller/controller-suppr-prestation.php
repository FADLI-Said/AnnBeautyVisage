<?php
session_start();
include_once "../../config.php";
include_once "../Model/model-prestation.php";

if ($_SESSION["user_role"] != "admin") {
    header("Location: ../Controller/controller-accueil.php");
    exit;
}

Prestations::deletePrestation($_GET["id"]);
header("Location: ../Controller/controller-admin.php?success=delete");
exit;

?>