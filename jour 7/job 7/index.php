<?php
// --- Fonctions demandées ---

// Fonction "gras" : mots commençant par majuscule en <b>
function gras($str) {
    $mots = explode(" ", $str); // On coupe la phrase en mots
    foreach ($mots as &$mot) {
        if (ctype_upper($mot[0])) { // si la 1ère lettre est une majuscule
            $mot = "<b>$mot</b>";
        }
    }
    return implode(" ", $mots); // On recolle les mots
}

// Fonction "césar" : décalage de caractères
function cesar($str, $decalage = 2) {
    $resultat = "";
    $longueur = strlen($str);

    for ($i = 0; $i < $longueur; $i++) {
        $car = $str[$i];

        // Vérifie si c'est une lettre
        if (ctype_alpha($car)) {
            $base = ctype_upper($car) ? 'A' : 'a';
            $resultat .= chr(((ord($car) - ord($base) + $decalage) % 26) + ord($base));
        } else {
            $resultat .= $car; // garde les espaces et ponctuations
        }
    }

    return $resultat;
}

// Fonction "plateforme" : mots finissant par "me" → ajoute "_"
function plateforme($str) {
    $mots = explode(" ", $str);
    foreach ($mots as &$mot) {
        if (substr($mot, -2) === "me") { // si le mot finit par "me"
            $mot .= "_";
        }
    }
    return implode(" ", $mots);
}
?>

<!-- --- Formulaire HTML --- -->
<form method="post">
    <label for="str">Texte :</label>
    <input type="text" name="str" id="str" required>

    <label for="fonction">Choisissez une fonction :</label>
    <select name="fonction" id="fonction">
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select>

    <button type="submit">Valider</button>
</form>

<?php
// --- Traitement du formulaire ---
if (isset($_POST["str"], $_POST["fonction"])) {
    $str = $_POST["str"];
    $fonction = $_POST["fonction"];

    if ($fonction === "gras") {
        echo gras($str);
    } elseif ($fonction === "cesar") {
        echo cesar($str); // décalage par défaut = 2
    } elseif ($fonction === "plateforme") {
        echo plateforme($str);
    } else {
        echo "Option inconnue.";
    }
}
?>
