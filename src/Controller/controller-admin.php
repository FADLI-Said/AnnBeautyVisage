<?php

session_start();

include_once "../../config.php";
include_once "../Model/model-prestation.php";

$prestations = Prestations::getAllPrestations();

$fmt = numfmt_create('fr_FR', NumberFormatter::CURRENCY);


include_once "../View/view-admin.php";

?>