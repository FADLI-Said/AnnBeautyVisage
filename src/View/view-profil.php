<?php include_once "../../templates/header.php" ?>

<body>
    <?php if (isset($_SESSION["user_mail"])) {
        include_once "../../templates/co-nav.php";
    } else {
        include_once "../../templates/deco-nav.php";
    } ?>
</body>

</html>