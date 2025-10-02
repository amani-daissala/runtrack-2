<?php
// Déclare la variable $str avec la phrase donnée
$str = "I'm sorry Dave I'm afraid I can't do that";

// Liste des voyelles (majuscules et minuscules)
$voyelles = "aeiouyAEIOUY";

// Boucle qui parcourt chaque caractère de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    
    // Vérifie si le caractère actuel est une voyelle
    if (strpos($voyelles, $str[$i]) !== false) {
        // Si oui, on l'affiche
        echo $str[$i];
    }
}
?>
