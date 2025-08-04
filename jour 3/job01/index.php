<?php
// Création du tableau avec les nombres donnés//
$nombres = [200,204,173,98,171,404,459];


// Boucle pour parcourir chaque valeur du tableau
foreach ($nombres as $nombre){

// Vérifie si le nombre est pair
if ($nombre % 2 == 0)
    echo $nombre . "est paire<br />";
}
// Sinon, le nombre est impaire
else{
    echo $nombre . "est impaire<br />";
}
?>
