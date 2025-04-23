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
        <div class="d-flex justify-content-center">
            <button class="btn d-none" id="avant"><i class="fa-solid fa-chevron-left"></i></button>

            <?php for ($offset = 0; $offset <= 2; $offset++): ?>
                <table class="container m-0 <?= $offset > 0 ? 'd-none' : '' ?>" id="mois<?= $offset ?>">
                    <caption>
                        <h2 class="text-center">
                            <?= $mois[$currentMonth + $offset] ?>
                        </h2>
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
                        $Month = $currentMonth + $offset;
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
                                    $dayOfWeek = date("N", mktime(0, 0, 0, $Month, $currentDay, $Year));
                                    echo "<td><a href='controller-date.php?month=" . $Month . "&numberDay=" . $currentDay . "&day=" . $dayOfWeek . "'>$currentDay</a></td>";
                                    $currentDay++;
                                }
                            }
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            <?php endfor; ?>

            <button class="btn" id="apres"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
    </section>

    <?php include_once "../../templates/footer.php" ?>
    <script>
        const avant = document.querySelector("#avant");
        const apres = document.querySelector("#apres");
        const currentMonth = <?= $currentMonth ?>;
        let newMonth = currentMonth;

        avant.addEventListener("click", function() {
            newMonth--;
            updateVisibility();
        });

        apres.addEventListener("click", function() {
            newMonth++;
            updateVisibility();
        });

        function updateVisibility() {
            for (let i = 0; i <= 2; i++) {
                document.getElementById(`mois${i}`).classList.add("d-none");
            }

            if (newMonth === currentMonth) {
                avant.classList.add("d-none");
            } else {
                avant.classList.remove("d-none");
            }

            if (newMonth === currentMonth + 2) {
                apres.classList.add("d-none");
            } else {
                apres.classList.remove("d-none");
            }

            document.getElementById(`mois${newMonth - currentMonth}`).classList.remove("d-none");
        }
    </script>
</body>

</html>
