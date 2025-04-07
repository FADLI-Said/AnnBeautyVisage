<?php require_once "../../templates/header.php" ?>

<body>
    <?php require_once "../../templates/nav.php" ?>

    <section id="connexion">
        <h1 class="text-center">Connexion</h1>
        <p class="text-center">Connectez-vous à votre compte pour réserver vos soins de beauté.</p>
        <form type="submit" class="container form-floating mt-5" method="POST" novalidate>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="id" placeholder="name@example.com"
                    value="<?= $_POST['id'] ?? '' ?>" required>
                <label for="id">Adresse Mail</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password"
                    value="<?= $_POST['password'] ?? '' ?>" required>
                <label for="password">Mot de passe</label>
            </div>
            <button type="submit" class="mt-3">Connexion</button>
        </form>
        <a href="../Controller/controller-inscription.php" class="mt-3">
            <i class="fas fa-user-plus"></i> Pas encore de compte ? Inscrivez-vous !
        </a>
    </section>


    <script src="https://kit.fontawesome.com/50a1934b21.js" crossorigin="anonymous"></script>
</body>

</html>