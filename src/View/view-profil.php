<?php include_once "../../templates/header.php" ?>

<body id="body-profil">
    <?php if (isset($_SESSION["user_mail"])) {
        include_once "../../templates/co-nav.php";
    } else {
        include_once "../../templates/deco-nav.php";
    } ?>

    <section class="text-center">
        <h1 class="py-3">Bonjour <?= $_SESSION["user_prenom"] ?></h1>
        <h2 class="pb-3">Voici votre profil</h2>


        <div class="profil-container">
            <div class="profil-card">
                <h3 class="pb-3">Informations personnelles</h3>
                <p><span class="fw-bold">Nom :</span> <?= $_SESSION["user_nom"] ?></p>
                <p><span class="fw-bold">Prénom :</span> <?= $_SESSION["user_prenom"] ?></p>
                <p><span class="fw-bold">Email :</span> <?= $_SESSION["user_mail"] ?></p>
                <p><span class="fw-bold">Numéro de téléphone :</span>
                    <?= implode('.', str_split($_SESSION["user_telephone"], 2)) ?>
                </p>
            </div>


            <div class="d-flex flex-column align-items-center justify-content-center action">
                <h3>Actions</h3>
                <button>Modifier le compte</button>
                <button data-bs-toggle="modal" data-bs-target="#supprimer">Supprimer le profil</button>

                <div class="modal fade" id="supprimer" tabindex="-1" aria-labelledby="supprimerLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-white" id="supprimerLabel">Confirmation de suppression
                                </h1>
                            </div>
                            <div class="modal-body text-white">
                                Êtes-vous sûr de vouloir supprimer votre profil ? Cette action est irréversible.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <a href="../Controller/controller-suppProfil.php?user=<?= $_SESSION["user_id"] ?>">Confirmer
                                    la suppression</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>


    </section>

    <?php include_once "../../templates/footer.php" ?>
</body>

</html>