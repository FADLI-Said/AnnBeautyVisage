<?php require_once "../../templates/header.php" ?>

<body id="body-inscription">
    <?php require_once "../../templates/nav.php" ?>

    <section class="pt-5" id="inscription">
        <h1>Inscription</h1>
        <p>Inscrivez-vous pour réserver vos soins de beauté.</p>
        <form type="submit" class="container form-floating mt-5" method="POST" novalidate>
            <div class="mb-3 row">
                <div class="form-floating col">
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom"
                        value="<?= $_POST['nom'] ?? '' ?>" required>
                    <label class="ps-4" for="nom"><i class="fas fa-user"></i> Nom</label>
                    <p class="text-white m-0"><?= $error["nom"] ?? "" ?></p>
                </div>
                <div class="form-floating col">
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom"
                        value="<?= $_POST['prenom'] ?? '' ?>" required>
                    <label class="ps-4" for="prenom"><i class="fas fa-user"></i> Prénom</label>
                    <p class="text-white m-0"><?= $error["prenom"] ?? "" ?></p>
                </div>
            </div>

            <div class="form-floating mb-3">
                <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Téléphone"
                    value="<?= $_POST['telephone'] ?? '' ?>" required>
                <label for="telephone"><i class="fas fa-phone"></i> Téléphone</label>
                <p class="text-white"><?= $error["telephone"] ?? "" ?></p>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Adresse Mail"
                    value="<?= $_POST['email'] ?? '' ?>" required>
                <label for="email"><i class="fas fa-envelope"></i> Adresse Mail</label>
                <p class="text-white"><?= $error["email"] ?? "" ?></p>
            </div>

            <div class="mb-3 row">
                <div class="form-floating col">
                    <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe"
                        placeholder="Mot de passe" value="<?= $_POST['mot_de_passe'] ?? '' ?>" required>
                    <label class="ps-4" for="mot_de_passe"><i class="fas fa-lock"></i> Mot de passe</label>
                    <p class="text-white"><?= $error["mot_de_passe"] ?? "" ?></p>
                </div>
                <div class="form-floating col">
                    <input type="password" class="form-control" id="confirmation_mot_de_passe"
                        name="confirmation_mot_de_passe" placeholder="Confirmation mot de passe"
                        value="<?= $_POST['confirmation_mot_de_passe'] ?? '' ?>" required>
                    <label class="ps-4" for="confirmation_mot_de_passe"><i class="fas fa-lock"></i> Confirmation mot de
                        passe</label>
                    <p class="text-white"><?= $error["confirmation_mot_de_passe"] ?? "" ?></p>
                </div>
            </div>

            <button type="submit" class="mt-3">Inscription</button>
        </form>
    </section>

    <?php include_once "../../templates/footer.php" ?>
</body>

</html>