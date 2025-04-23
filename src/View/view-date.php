<?php require_once "../../templates/header.php" ?>

<body>
    <?php if (isset($_SESSION["user_mail"])) {
        include_once "../../templates/co-nav.php";
    } else {
        include_once "../../templates/deco-nav.php";
    } ?>


    <section class="container" id="date">
        <h1 class="text-center"><?= $jours[$_GET["day"]] ?></h1>
        <h2 class="text-center"><?= $_GET["numberDay"]; ?> <?= $mois[$_GET["month"]] ?></h2>
        <div class="row g-3">
            <?php

            for ($i = 9; $i <= 17; $i++) {
                for ($j = 0; $j < 60; $j += 30) { ?>
                    <a class='col-4 text-center' href='controller-conf_rdv.php'>
                        <div><?= $i ?>:<?= sprintf("%02d", $j) ?></div>
                    </a>
            <?php
                }
            }
            ?>
        </div>
    </section>


    <?php include_once "../../templates/footer.php" ?>
</body>

</html>