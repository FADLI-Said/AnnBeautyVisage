<?php require_once "../../templates/header.php" ?>

<body>
    <?php if (isset($_SESSION["user_mail"])) {
        include_once "../../templates/co-nav.php";
    } else {
        include_once "../../templates/deco-nav.php";
    } ?>

    <h1 class="text-center">Choix de la préstation</h1>
    <section class="container" id="prestation">

        <div id="left">

            <div class="border border-black rounded shadow p-3 mb-5 rounded">
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
                    <div class="d-flex justify-content-between">
                        <p><?= $value["prestation_nom"] ?></p>
                        <div class="d-flex gap-2">
                            <p><?= $duree ?> -</p>
                            <p>à partir de <?= numfmt_format_currency($fmt, $value["prestation_prix"], "EUR") ?></p>
                            <a href="../Controller/controller-reservation.php?prestation=<?= $value["prestation_id"] ?>" class="rounded">Choisir</a>
                        </div>
                    </div>
                    <?php if ($value !== $lastElement) { ?>
                        <hr class="mt-2">
                    <?php } ?>
                <?php
                }
                ?>
            </div>
        </div>
        <div id="right" class="mb-5">
            <div class="border border-black rounded shadow py-3 mb-2 rounded">
                <div class="d-flex justify-content-around">
                    <button class="border-bottom border-black p-0 fw-bold">Note globale</button>
                    <button class="border-bottom border-secondary p-0">Avis</button>
                </div>
                <div class="d-flex p-3 align-item-center">
                    <p class="h1">5,0 <i class="fas fa-star"></i></p>
                    <!-- <div>
                        <p>Accueil 5,0 <i class="fas fa-star"></i></p>
                        <p>Propreté 5,0 <i class="fas fa-star"></i></p>
                        <p>Cadre & Ambiance 5,0 <i class="fas fa-star"></i></p>
                        <p>Qualité de la prestation 5,0 <i class="fas fa-star"></i></p>
                        <p>100 ont donne leur avis</p>
                    </div> -->
                </div>

            </div>

            <div class="border border-black rounded shadow p-3 mb-5 rounded">
                <div class="d-flex justify-content-between">
                    <p>Lundi</p>
                    <p>09:00 - 18:00</p>
                </div>

                <hr class="mt-0">
                <div class="d-flex justify-content-between">
                    <p>Mardi</p>
                    <p>09:00 - 18:00</p>
                </div>

                <hr class="mt-0">
                <div class="d-flex justify-content-between">
                    <p>Mercredi</p>
                    <p>09:00 - 18:00</p>
                </div>

                <hr class="mt-0">
                <div class="d-flex justify-content-between">
                    <p>Jeudi</p>
                    <p>09:00 - 18:00</p>
                </div>

                <hr class="mt-0">
                <div class="d-flex justify-content-between">
                    <p>Vendredi</p>
                    <p>09:00 - 18:00</p>
                </div>

                <hr class="mt-0">
                <div class="d-flex justify-content-between">
                    <p>Samedi</p>
                    <p>Fermé</p>
                </div>

                <hr class="mt-0">
                <div class="d-flex justify-content-between">
                    <p>Dimanche</p>
                    <p>Fermé</p>
                </div>
            </div>
        </div>
    </section>


    <?php include_once "../../templates/footer.php" ?>
</body>

</html>