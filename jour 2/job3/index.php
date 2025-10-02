<<<<<<< HEAD
<?php
// Boucle de 0 à 100
for ($i = 0; $i <= 100; $i++) {

    // Si le nombre est exactement 42, on affiche "La Plateforme_" à la place
    if ($i == 42) {
        echo "La Plateforme_<br />";
    }
    
    // Sinon, si le nombre est entre 0 et 20 inclus, on l'affiche en italique
    elseif ($i >= 0 && $i <= 20) {
        echo "<i>$i</i><br />";
    }

    // Sinon, si le nombre est entre 25 et 50 inclus, on l'affiche souligné
    elseif ($i >= 25 && $i <= 50) {
        echo "<u>$i</u><br />";
    }

    // Sinon, on l'affiche normalement
    else {
        echo "$i<br />";
    }
}
?>
=======
<?php
// Boucle de 0 à 100
for ($i = 0; $i <= 100; $i++) {

    // Si le nombre est exactement 42, on affiche "La Plateforme_" à la place
    if ($i == 42) {
        echo "La Plateforme_<br />";
    }
    
    // Sinon, si le nombre est entre 0 et 20 inclus, on l'affiche en italique
    elseif ($i >= 0 && $i <= 20) {
        echo "<i>$i</i><br />";
    }

    // Sinon, si le nombre est entre 25 et 50 inclus, on l'affiche souligné
    elseif ($i >= 25 && $i <= 50) {
        echo "<u>$i</u><br />";
    }

    // Sinon, on l'affiche normalement
    else {
        echo "$i<br />";
    }
}
?>
>>>>>>> 032b738649d2b429bb7235b2f26bd8060cb51674
