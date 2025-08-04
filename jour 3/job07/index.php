<?php
// Variable contenant la phrase donnée
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Récupère le premier caractère
$premier = $str[0];

// Boucle pour parcourir la chaîne (sauf le dernier caractère)
for ($i = 0; $i < strlen($str) - 1; $i++) {
    // Remplace le caractère actuel par le suivant
    echo $str[$i + 1];
}

// Remplace le dernier caractère par le premier
echo $premier;
?>
