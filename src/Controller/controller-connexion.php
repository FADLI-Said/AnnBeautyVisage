<?php

include_once "../../config.php";


$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["id"])) {
        if (empty($_POST["id"])) {
            $error["id"] = "<i class='fa-solid fa-circle-exclamation'></i> L'adresse mail est obligatoire.";
        }
    }

    if (isset($_POST["password"])) {
        if (empty($_POST["password"])) {
            $error["password"] = "<i class='fa-solid fa-circle-exclamation'></i> Le mot de passe est obligatoire.";
        }
    }

    if (empty($error)) {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT user_mail, user_mdp FROM 76_users WHERE user_mail = :email";

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":email", $_POST["id"]);
        $stmt->execute();

        $stmt->rowCount() == 0 ? $found = false : $found = true;

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($found == false) {
            $error["connexion"] = "<i class='fa-solid fa-circle-exclamation'></i> L'identifiant ou le mot de passe est incorrect.";
        } else {
            if (password_verify($_POST["password"], $user["user_mdp"])) {
                $_SESSION = $user;
                header("Location: ../Controller/controller-index.php");
                exit;
            } else {
                $error["connexion"] = "<i class='fa-solid fa-circle-exclamation'></i> L'identifiant ou le mot de passe est incorrect.";
            }
        }

    }

}

include_once "../View/view-connexion.php";

?>