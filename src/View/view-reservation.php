<?php require_once "../../templates/header.php" ?>

<body>
    <?php if (isset($_SESSION["user_mail"])) {
        include_once "../../templates/co-nav.php";
    } else {
        include_once "../../templates/deco-nav.php";
    } ?>


    <section id="reservation">
        <a href="../Controller/controller-accueil.php" class="w-100 text-start retour"><i class="fas fa-arrow-left"></i>
            Accueil</a>
        <h1 class="text-center">Réservation</h1>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <table class="container">
                        <caption>
                            <h3 class="text-center"><?= $mois[date("n")] ?></h3>
                        </caption>
                        <thead>
                            <tr>
                                <th>Lun</th>
                                <th>Mar</th>
                                <th>Mer</th>
                                <th>Jeu</th>
                                <th>Ven</th>
                                <th>Sam</th>
                                <th>Dim</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $Year = date("Y");
                            $Month = date("n");
                            $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $Month, $Year);
                            $firstDay = mktime(0, 0, 0, $Month, 1, $Year);
                            $firstDayOfWeek = date("N", $firstDay);
                            $currentDay = 1;
                            for ($i = 0; $i < 7; $i++) {
                                echo "<tr>";
                                if ($currentDay > $daysInMonth) {
                                    break;
                                }
                                for ($j = 1; $j <= 7; $j++) {
                                    if ($i == 0 && $j < $firstDayOfWeek) {
                                        echo "<td></td>";
                                    } elseif ($currentDay > $daysInMonth) {
                                        echo "<td></td>";
                                    } else {
                                        echo "<td>$currentDay</td>";
                                        $currentDay++;
                                    }
                                }
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>


                <div class="carousel-item">
                    <table class="container">
                        <caption>
                            <h3 class="text-center"><?= $mois[date("n") + 1] ?></h3>
                        </caption>
                        <thead>
                            <tr>
                                <th>Lun</th>
                                <th>Mar</th>
                                <th>Mer</th>
                                <th>Jeu</th>
                                <th>Ven</th>
                                <th>Sam</th>
                                <th>Dim</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $Year = date("Y");
                            $Month = date("n") + 1;
                            $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $Month, $Year);
                            $firstDay = mktime(0, 0, 0, $Month, 1, $Year);
                            $firstDayOfWeek = date("N", $firstDay);
                            $currentDay = 1;
                            for ($i = 0; $i < 7; $i++) {
                                echo "<tr>";
                                if ($currentDay > $daysInMonth) {
                                    break;
                                }
                                for ($j = 1; $j <= 7; $j++) {
                                    if ($i == 0 && $j < $firstDayOfWeek) {
                                        echo "<td></td>";
                                    } elseif ($currentDay > $daysInMonth) {
                                        echo "<td></td>";
                                    } else {
                                        echo "<td>$currentDay</td>";
                                        $currentDay++;
                                    }
                                }
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>


                <div class="carousel-item">
                    <table class="container">
                        <caption>
                            <h3 class="text-center"><?= $mois[date("n") + 2] ?></h3>
                        </caption>
                        <thead>
                            <tr>
                                <th>Lun</th>
                                <th>Mar</th>
                                <th>Mer</th>
                                <th>Jeu</th>
                                <th>Ven</th>
                                <th>Sam</th>
                                <th>Dim</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $Year = date("Y");
                            $Month = date("n") + 2;
                            $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $Month, $Year);
                            $firstDay = mktime(0, 0, 0, $Month, 1, $Year);
                            $firstDayOfWeek = date("N", $firstDay);
                            $currentDay = 1;
                            for ($i = 0; $i < 7; $i++) {
                                echo "<tr>";
                                if ($currentDay > $daysInMonth) {
                                    break;
                                }
                                for ($j = 1; $j <= 7; $j++) {
                                    if ($i == 0 && $j < $firstDayOfWeek) {
                                        echo "<td></td>";
                                    } elseif ($currentDay > $daysInMonth) {
                                        echo "<td></td>";
                                    } else {
                                        echo "<td>$currentDay</td>";
                                        $currentDay++;
                                    }
                                }
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <?php include_once "../../templates/footer.php" ?>
</body>

</html>