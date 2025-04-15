<?php require_once "../../templates/header.php" ?>

<body id="body-connexion">
    <?php if (isset($_SESSION["user_mail"])) {
        include_once "../../templates/co-nav.php";
    } else {
        include_once "../../templates/deco-nav.php";
    } ?>

    <section id="connexion">
        <a href="../Controller/controller-accueil.php" class="w-100 text-start retour"><i class="fas fa-arrow-left"></i>
            Accueil</a>
        <h1 class="text-center">Connexion</h1>
        <p class="text-center">Connectez-vous à votre compte pour réserver vos soins de beauté.</p>
        <form type="submit" class="container form-floating mt-5" method="POST" novalidate>
            <div class="form-floating">
                <input type="email" class="form-control" name="id" id="id" placeholder="name@example.com"
                    value="<?= $_POST['id'] ?? '' ?>" required>
                <label for="id"><i class="fas fa-envelope"></i> Adresse Mail</label>
                <p><?= $error["id"] ?? "" ?></p>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                    value="<?= $_POST['password'] ?? '' ?>" required>
                <label for="password"><i class="fas fa-lock"></i> Mot de passe</label>
                <p><?= $error["password"] ?? "" ?></p>
            </div>
            <p><?= $error["connexion"] ?? "" ?></p>
            <button type="" class="btn">Connexion</button>
            <a href="../Controller/controller-inscription.php">
                <i class="fas fa-user-plus"></i> Pas encore de compte ? Inscrivez-vous !
            </a>
        </form>


    </section>

    <?php include_once "../../templates/footer.php" ?>
</body>

</html>