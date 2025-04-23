<?php

$quote = [
    "La beauté commence au moment où vous décidez d'être vous-même.",
    "La beauté est une lumière dans le cœur.",
    "La vraie beauté d'une femme se reflète dans son âme.",
    "La beauté est éternelle quand elle vient de l'intérieur.",
    "La beauté est une promesse de bonheur."
];

$auteur = ["Coco Chanel", "Khalil Gibran", "Audrey Hepburn", "Sophia Loren", "Stendhal"];

$randomIndex = array_rand($quote);
$randomQuote = $quote[$randomIndex];
$randomAuthor = $auteur[$randomIndex];

?>

<footer>
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>"<?= $randomQuote ?>"</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            <?= $randomAuthor ?>
        </figcaption>
    </figure>

    <!-- <div class="container text-center">
        <p>&copy; <?= date("Y"); ?> Mon Site Web. Tous droits réservés.</p>
    </div> -->
</footer>
<script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="https://kit.fontawesome.com/50a1934b21.js" crossorigin="anonymous"></script>