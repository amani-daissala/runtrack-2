<?php
// Boucle de 0 à 1337
for ($i = 0; $i <= 1337; $i++) {

    // Si le nombre est 42
    if ($i == 42) {
        // On affiche 42 en gras et souligné, avec un saut de ligne
        echo "<b><u>$i</u></b><br />";
    } else {
        // Sinon, on affiche le nombre normalement avec un saut de ligne
        echo "$i<br />";
    }
}
?>
