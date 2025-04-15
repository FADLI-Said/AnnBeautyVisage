<?php require_once "../../templates/header.php" ?>

<body id="body-accueil">
    <?php if (isset($_SESSION["user_mail"])) { 
        include_once "../../templates/co-nav.php";
    } else {
        include_once "../../templates/deco-nav.php";
    } ?>
    <section id="accueil">
        <div class="container">
            <h1>Bienvenue sur notre site de réservation de soins de beauté</h1>
            <p>Nous vous proposons une large gamme de prestations pour prendre soin de vous.</p>
            <p>Réservez dès maintenant votre soin en ligne !</p>
            <a href="/src/Controller/controller-prestation.php">Découvrir nos prestations</a>
        </div>
    </section>

    <?php require_once "../../templates/footer.php" ?>
</body>

</html>