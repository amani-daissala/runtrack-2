<<<<<<< HEAD
<?php
// Parcourir les nombres de 2 à 1000
for ($i = 2; $i <= 1000; $i++) {
    $estPremier = true; // On suppose que le nombre est premier

    // Tester la divisibilité par tous les nombres de 2 à la racine carrée de $i
    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j == 0) {
            $estPremier = false; // Trouvé un diviseur → pas premier
            break; // On arrête la boucle
        }
    }

    // Si $estPremier est encore vrai, c’est un nombre premier
    if ($estPremier) {
        echo $i . "<br />";
    }
}
?>
=======
<?php
// Parcourir les nombres de 2 à 1000
for ($i = 2; $i <= 1000; $i++) {
    $estPremier = true; // On suppose que le nombre est premier

    // Tester la divisibilité par tous les nombres de 2 à la racine carrée de $i
    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j == 0) {
            $estPremier = false; // Trouvé un diviseur → pas premier
            break; // On arrête la boucle
        }
    }

    // Si $estPremier est encore vrai, c’est un nombre premier
    if ($estPremier) {
        echo $i . "<br />";
    }
}
?>
>>>>>>> 032b738649d2b429bb7235b2f26bd8060cb51674
