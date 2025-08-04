<?php
// Déclare la variable $str avec la phrase donnée
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

// Liste des voyelles (majuscules et minuscules)
$voyelles = "aeiouyAEIOUYàâäéèêëîïôöùûü";

// Création d’un tableau associatif pour stocker le nombre de voyelles et de consonnes
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

// Boucle pour parcourir chaque caractère de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    $caractere = $str[$i];

    // Vérifie si c’est une lettre (on ignore les espaces, apostrophes et ponctuation)
    if (ctype_alpha($caractere)) {
        
        // Si le caractère est une voyelle
        if (strpos($voyelles, $caractere) !== false) {
            $dic["voyelles"]++;
        }
        // Sinon, c’est une consonne
        else {
            $dic["consonnes"]++;
        }
    }
}

// Affichage des résultats dans un tableau HTML
echo "<table border='1'>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$dic['voyelles']}</td>
                <td>{$dic['consonnes']}</td>
            </tr>
        </tbody>
      </table>";
?>
