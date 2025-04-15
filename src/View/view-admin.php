<?php require_once "../../templates/header.php" ?>

<body id="body-prestation">
    <?php if (isset($_SESSION["user_mail"])) {
        include_once "../../templates/co-nav.php";
    } else {
        include_once "../../templates/deco-nav.php";
    } ?>

    <section id="prestations">
        <a href="../Controller/controller-accueil.php" class="w-100 text-start retour"><i class="fas fa-arrow-left"></i>
            Accueil</a>
        <table class="container">
            <caption>
                <h1>Prestations</h1>
                <h2>Liste des prestations</h2>
            </caption>
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Durée</th>
                    <th scope="col">Actions</th>
                </tr>

            </thead>
            <tbody>
                <?php foreach ($prestations as $value) {

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
                    <tr>
                        <td><?= $value["prestation_nom"] ?></td>
                        <td><?= $value["prestation_description"] ?></td>
                        <td><?= numfmt_format_currency($fmt, $value["prestation_prix"], "EUR") ?></td>
                        <td><?= $duree ?></td>
                        <td>
                            <a
                                href="../Controller/controller-modif-prestation.php?id=<?= $value["prestation_id"] ?>">Modifier</a>
                            <a href="#" class="text-danger" data-bs-toggle="modal"
                                data-bs-target="#confirmModal<?= $value["prestation_id"] ?>">Supprimer</a>

                            <div class="modal fade" id="confirmModal<?= $value["prestation_id"] ?>" tabindex="-1"
                                aria-labelledby="confirmModalLabel<?= $value["prestation_id"] ?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="confirmModalLabel<?= $value["prestation_id"] ?>">
                                                Confirmation</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Êtes-vous sûr de vouloir supprimer cette prestation ?
                                            <p>
                                                <?= $value["prestation_nom"] ?>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Annuler</button>
                                            <a href="../Controller/controller-suppr-prestation.php?id=<?= $value["prestation_id"] ?>"
                                                class="btn btn-danger">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
    <?php include_once "../../templates/footer.php" ?>
</body>

</html>