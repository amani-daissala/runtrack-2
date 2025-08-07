<?php
// Vérifie s’il y a au moins un argument GET
if (!empty($_GET)) {

    // Début du tableau HTML
    echo "<table border='1'>";

    // En-tête du tableau avec 2 colonnes : Argument et Valeur
    echo "<thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
          </thead>";

    // Corps du tableau
    echo "<tbody>";

    // Parcourt chaque paire (clé => valeur) dans $_GET
    foreach ($_GET as $argument => $valeur) {
        echo "<tr>"; // Commence une nouvelle ligne
        echo "<td>" . htmlspecialchars($argument) . "</td>"; // Colonne 1 : nom du champ
        echo "<td>" . htmlspecialchars($valeur) . "</td>";   // Colonne 2 : valeur saisie
        echo "</tr>"; // Fin de la ligne
    }

    echo "</tbody>";
    echo "</table>"; // Fin du tableau

} else {
    // Aucun argument GET n’a été envoyé
    echo "Aucun argument GET n'a été envoyé.";
}
?>
