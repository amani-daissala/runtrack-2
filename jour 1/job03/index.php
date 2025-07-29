  <?php
// Déclaration de quelques variables pour l'exemple
$age = 30;
$nom = "Alice";
$estActif = true;
$notes = [12, 15, 17];

// Récupérer toutes les variables définies
$variables = get_defined_vars();

// Filtrer uniquement les variables utilisateur
$user_vars = [];
foreach ($variables as $key => $value) {
    // Exclure les variables internes de PHP (comme $_SERVER, $_GET, etc.)
    if (!in_array($key, ['_GET', '_POST', '_SERVER', '_FILES', '_COOKIE', '_SESSION', '_REQUEST', '_ENV', 'GLOBALS'])) {
        $user_vars[$key] = $value;
    }
}

// Générer le tableau HTML
echo "<table border='1' cellpadding='5'>";
echo "<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>";
echo "<tbody>";

foreach ($user_vars as $nom => $valeur) {
    echo "<tr>";
    echo "<td>" . gettype($valeur) . "</td>";
    echo "<td>\$$nom</td>";
    echo "<td>";

    // Afficher proprement les tableaux ou autres structures
    if (is_array($valeur)) {
        echo htmlspecialchars(print_r($valeur, true));
    } else {
        echo htmlspecialchars((string)$valeur);
    }

    echo "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
?>
