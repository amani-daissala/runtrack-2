<?php
// Déclaration de la fonction
function occurrences($str, $char) {
    $count = 0; // compteur initialisé à 0

    // Parcours de la chaîne caractère par caractère
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $char) {
            $count++; // on incrémente si on trouve $char
        }
    }

    return $count; // retourne le nombre trouvé
}

// Exemple d'utilisation
echo occurrences("Bonjour", "o"); // doit afficher 2
?>
