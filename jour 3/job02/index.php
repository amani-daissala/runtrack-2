<?php
// Création de la variable string
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Boucle pour parcourir la chaîne
for ($i = 0; $i < strlen($str); $i += 2) { 
    // $i += 2 permet d'avancer de 2 caractères à chaque tour
    echo $str[$i];
}
?>
