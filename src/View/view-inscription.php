<?php require_once "../../templates/header.php" ?>

<body id="body-inscription">
    <?php if (isset($_SESSION["user_mail"])) {
        include_once "../../templates/co-nav.php";
    } else {
        include_once "../../templates/deco-nav.php";
    } ?>

    <section id="inscription">
        <a href="../Controller/controller-connexion.php" class="w-100 text-start retour"><i
                class="fas fa-arrow-left"></i>
            Connexion</a>
            <h1>Inscription</h1>
            <p>Inscrivez-vous pour réserver vos soins de beauté.</p>
        <form type="submit" class="container form-floating mt-5" method="POST" novalidate>
            <div class="double">
                <div class="form-floating">
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom"
                        value="<?= $_POST['nom'] ?? '' ?>" required>
                    <label for="nom"><i class="fas fa-user"></i> Nom</label>
                    <p><?= $error["nom"] ?? "" ?></p>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom"
                        value="<?= $_POST['prenom'] ?? '' ?>" required>
                    <label for="prenom"><i class="fas fa-user"></i> Prénom</label>
                    <p><?= $error["prenom"] ?? "" ?></p>
                </div>
            </div>

            <div class="form-floating">
                <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Téléphone"
                    value="<?= $_POST['telephone'] ?? '' ?>" required>
                <label for="telephone"><i class="fas fa-phone"></i> Téléphone</label>
                <p><?= $error["telephone"] ?? "" ?></p>
            </div>

            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="Adresse Mail"
                    value="<?= $_POST['email'] ?? '' ?>" required>
                <label for="email"><i class="fas fa-envelope"></i> Adresse Mail</label>
                <p><?= $error["email"] ?? "" ?></p>
            </div>

            <div class="double">
                <div class="form-floating">
                    <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe"
                        placeholder="Mot de passe" value="<?= $_POST['mot_de_passe'] ?? '' ?>" required>
                    <label for="mot_de_passe"><i class="fas fa-lock"></i> Mot de passe</label>
                    <p><?= $error["mot_de_passe"] ?? "" ?></p>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="confirmation_mot_de_passe"
                        name="confirmation_mot_de_passe" placeholder="Confirmation mot de passe"
                        value="<?= $_POST['confirmation_mot_de_passe'] ?? '' ?>" required>
                    <label for="confirmation_mot_de_passe"><i class="fas fa-lock"></i> Confirmation mot de
                        passe</label>
                    <p><?= $error["confirmation_mot_de_passe"] ?? "" ?></p>
                </div>
            </div>

            <button type="submit" class="mt-3 btn">Inscription</button>
        </form>
    </section>

    <?php include_once "../../templates/footer.php" ?>
</body>

</html>