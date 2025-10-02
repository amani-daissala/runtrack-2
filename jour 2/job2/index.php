<<<<<<< HEAD
<?php
// On lance une boucle de 0 à 1337 inclus
for ($i = 0; $i <= 1337; $i++) {

    // On vérifie si le nombre est à exclure
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111 || $i == 3233) {
        // Si c'est l'un des nombres à exclure, on ne fait rien (on saute cette itération)
        continue;
    }

    // Si le nombre n'est pas exclu, on l'affiche suivi d'un saut de ligne
    echo "$i<br />";
}
?>
=======
<?php
// On lance une boucle de 0 à 1337 inclus
for ($i = 0; $i <= 1337; $i++) {

    // On vérifie si le nombre est à exclure
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111 || $i == 3233) {
        // Si c'est l'un des nombres à exclure, on ne fait rien (on saute cette itération)
        continue;
    }

    // Si le nombre n'est pas exclu, on l'affiche suivi d'un saut de ligne
    echo "$i<br />";
}
?>
>>>>>>> 032b738649d2b429bb7235b2f26bd8060cb51674
 