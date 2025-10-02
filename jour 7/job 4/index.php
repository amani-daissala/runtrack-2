<?php
// Déclaration de la fonction
function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            // éviter la division par zéro
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Erreur : division par zéro";
            }
        case '%':
            // éviter le modulo par zéro
            if ($b != 0) {
                return $a % $b;
            } else {
                return "Erreur : modulo par zéro";
            }
        default:
            return "Opération inconnue";
    }
}

// Exemples d'appels
echo calcule(10, '+', 5) . "<br>"; // affiche 15
echo calcule(10, '-', 3) . "<br>"; // affiche 7
echo calcule(4, '*', 6) . "<br>";  // affiche 24
echo calcule(20, '/', 4) . "<br>"; // affiche 5
echo calcule(20, '%', 3) . "<br>"; // affiche 2
?>
