<?php
// Définir les dimensions du rectangle
$largeur = 20;
$hauteur = 10;

// Boucle pour parcourir les lignes (hauteur)
for ($i = 1; $i <= $hauteur; $i++) {

    // Boucle pour parcourir les colonnes (largeur)
    for ($j = 1; $j <= $largeur; $j++) {
        echo "*"; // Affiche un caractère du rectangle
    }

    // Retour à la ligne après chaque rangée
    echo "<br />";
}
?>
