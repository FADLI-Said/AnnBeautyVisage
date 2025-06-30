<?php require_once "../../templates/header.php" ?>

<body id="body-admin">
    <?php if (isset($_SESSION["user_mail"])) {
        include_once "../../templates/co-nav.php";
    } else {
        include_once "../../templates/deco-nav.php";
    } ?>

    <section id="admin">
        <div class="border border-black rounded shadow p-3 mt-5 rounded mx-auto" id="prestations">
            <?php
            $lastElement = end($prestations);
            foreach ($prestations as $value) {

                $duree = "Non défini";
                if ($value["prestation_duree"] != null) {
                    $date = new DateTimeImmutable($value["prestation_duree"]);
                    if ($date->format('H') == 0 && $date->format('i') != 0) {
                        $duree = $date->format('i') . " min";
                    } elseif ($date->format('H') >= 1 && $date->format('i') == 0) {
                        $duree = $date->format('H') . " h";
                    } elseif ($date->format('H:i:s') == "00:00:00") {
                        $duree = "Non défini";
                    } else {
                        $duree = $date->format('H') . " h " . $date->format('i') . " min";
                    }
                }

            ?>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center gap-2 w-50">
                        <img src="../../assets/images/<?= $value["prestation_image"] ?>" class="rounded img-fluid w-25" alt="">
                        <p class="m-0 h4"><?= $value["prestation_nom"] ?> <br> <span class="fs-6 fw-normal"><?= $value["prestation_description"] ?></span></p>
                    </div>
                    <div class="d-flex align-items-center justify-content-end gap-2 w-50">

                        <p class="m-0"><?= $duree ?> -</p>
                        <p class="m-0">à partir de <?= numfmt_format_currency($fmt, $value["prestation_prix"], "EUR") ?></p>

                        <a href="../Controller/controller-modif-prestation.php?prestation=<?= $value["prestation_id"] ?>" class="rounded btn btn-outline-light">Modifier</a>
                        <a href="#" class="rounded btn btn-outline-danger" data-bs-toggle="modal"
                            data-bs-target="#confirmModal<?= $value["prestation_id"] ?>">Supprimer</a>

                        <div data-bs-theme="dark" class="modal fade" id="confirmModal<?= $value["prestation_id"] ?>" tabindex="-1"
                            aria-labelledby="confirmModalLabel<?= $value["prestation_id"] ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="confirmModalLabel<?= $value["prestation_id"] ?>">
                                            Confirmation</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Êtes-vous sûr de vouloir supprimer cette prestation ?
                                        <p class="text-danger">
                                            "<?= $value["prestation_nom"] ?>"
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary"
                                            data-bs-dismiss="modal">Annuler</button>
                                        <a href="../Controller/controller-suppr-prestation.php?prestation=<?= $value["prestation_id"] ?>"
                                            class="btn btn-outline-danger">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($value !== $lastElement) { ?>
                    <hr>
                <?php } ?>
            <?php } ?>
        </div>
        <a class="rounded btn btn-outline-light w-75 mx-auto" href="../Controller/controller-add-prestation.php">Ajouter une prestation</a>
    </section>
    <?php include_once "../../templates/footer.php" ?>
</body>

</html>